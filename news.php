<?php
    include "./include/functions.inc.php";
    require "./bd_connect.php";

    $hour = date('H:i');
    if($hour >= date('00:00') && $hour <= date('04:00')) {
        $apiKey = "pub_12334ca5e8865d87fedcd768eaf3e30b7dc96";
    }
    if($hour > date('04:00') && $hour <= date('08:00')) {
        $apiKey = "pub_12898205ae044bef96d91579f96b93a9d9637";
    }
    if($hour > date('08:00') && $hour <= date('12:00')) {
        $apiKey = "pub_12901c5b60d669a126641c50d27dd8031be78";
    }
    if($hour >= date('12:00') && $hour <= date('16:00')) {
        $apiKey = "pub_12903d62c39db9db1f00d4b56ba826ae38845";
    }
    if($hour > date('16:00') && $hour <= date('20:00')) {
        $apiKey = "pub_129044113e78344d52baabcb0b949a39c7b2c";
    }
    if($hour > date('20:00') && $hour <= date('23:59')) {
        $apiKey = "pub_141439fef5ddc61dc575e7c472a052ed92663";
    }

    $file = 'logs.txt';
                
    $categories = ['top', 'politics', 'science', 'sports', 'technology'];

    foreach($categories as $category) {

        for($page=0;$page<=20;$page++) {

            $url = "https://newsdata.io/api/1/news?category=$category&country=fr&page=$page&apikey=$apiKey";

            //on enregistre les traces (url) dans un fichier log
            $day = "[".date("d")."/".date("m")."/".date("y")."]";
            $hour = "[".date("H").":".date("i").":".date("s")."]";
            $lien = $url;
            $data = $day.$hour.$lien. "\n";
            write($data, $file);

            //on parcours lurl
            $res = file_get_contents($url); 
            $newsData = json_decode($res, true);

            foreach($newsData['results'] as $news) {
                
                //on recupere les donnees de la news
                $titre = $news['title'];
                $description = $news['description'];
                $contenu = $news['content'];
                $date = $news['pubDate'];
                $urlPicture = urldecode($news['image_url']);
                $source = $news['link'];
                $sourceName = $news['source_id'];

                $parse = parse_url($source);
                $domain = $parse['host'];
                $sourceNameUrl = "https://$domain"; 

                $categorie = $news['category'][0];

                //si aucun donnees n'est manquant on fait l'insertion
                if($titre != null &&  $description != null && $contenu != null && $date != null && $urlPicture != null
                    && $source != null && $sourceName != null && $sourceNameUrl != null) {
                
                    $statement = $db->prepare("INSERT INTO news(id, titre, description, contenu, date, imageUrl, sourceUrl, sourceName, sourceNameUrl, categorie)VALUES
                            (UUID(), :titre, :description, :contenu, :date, :imageUrl, :sourceUrl, :sourceName, :sourceNameUrl, :categorie)");
                    $statement->execute([
                        "titre" => $titre,
                        "description" => $description,
                        "contenu" => $contenu,
                        "date" => $date,
                        "imageUrl" => $urlPicture,
                        "sourceUrl" => $source,
                        "sourceName" => $sourceName,
                        "sourceNameUrl" => $sourceNameUrl,
                        "categorie" => $categorie
                    ]);
                    echo "INSERTION REUSSI \n";
                }
            }
        }
    }

    // $date = date("Y-m-d", strtotime('-3 day'));
    // $statement = $db->prepare("DELETE FROM news WHERE date < '$date' ");
    // $statement->execute();
 
?>