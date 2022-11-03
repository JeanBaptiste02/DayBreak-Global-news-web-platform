<?php
    include "./include/functions.inc.php";
    require "./bd_connect.php";

    $callAPI = read('logs.txt');

    if($callAPI == FALSE) {

        $apiKey = "pub_12334ca5e8865d87fedcd768eaf3e30b7dc96";
                   
        $categories = ['top', 'politics', 'science', 'sports', 'technology'];
    
        foreach($categories as $category) {
    
            for($page=0;$page<=10;$page++) {
    
                $url = "https://newsdata.io/api/1/news?category=$category&country=fr&page=$page&apikey=$apiKey";
    
                //on enregistre les traces (url) dans un fichier log
                $day = "[".date("d")."/".date("m")."/".date("y")."]";
                $hour = "[".date("H").":".date("i").":".date("s")."]";
                $lien = $url;
                $data = $day.$hour.$lien. "\n";
                write($data);
    
                //on parcours lurl
                $res = file_get_contents($url); 
                $newsData = json_decode($res, true);
    
                foreach($newsData['results'] as $news) {
                    
                    //on recupere les donnees de la news
                    $titre = $news['title'];
                    $description = $news['description'];
                    $contenu = $news['content'];
                    $date = $news['pubDate'];
                    $urlPicture = $news['image_url'];
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
                    }
                }
            }
        }
    }