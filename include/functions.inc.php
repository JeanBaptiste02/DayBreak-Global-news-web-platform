<?php

    define('NEWS_API_KEY','d0f3c883bf694d3f90c45a51f4284d5f');

    /**
     * permet d'avoir les images des news
     * @author Damodarane&Elumalai&Zhang&Gunduz
     * @return les valeurs souhaitees
     */

    function getImages(): string{
        $apikey = NEWS_API_KEY;
        $jsonStr = file_get_contents("https://newsapi.org/v2/top-headlines?country=fr&apiKey=$apikey");
        //$jsonStr = htmlspecialchars($jsonStr);
        $jsonArr = json_decode($jsonStr, true);
        
        foreach($jsonArr as $key => $value) {
            if($key == "urlToImage") {
                $url = $value;
            } 
        }
        $s.="<figure> \n";
        $s.="<img class='monimage' src='$url' alt='image de chaque news' width='150' height='150' /> \n";
        $s.="</figure> \n";

        return $s;
    }
?>