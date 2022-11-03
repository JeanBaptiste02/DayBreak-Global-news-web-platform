<?php

    function write($strData) {

        $handle = fopen("logs.txt", "a+");
        fputs($handle, $strData);
        fclose($handle);

    }

    function read($filename): bool {
        
        $today = "[".date("d")."/".date("m")."/".date("y")."]";

        $handle = fopen($filename, 'r+');
        
        /*On lit la ligne courante*/
        $buffer = fgets($handle);
        
        $dayInFile = substr($buffer, 0, 10); // on extrait la date de chaque ligne

        if($today == $dayInFile)  {
            $callAPI = TRUE; // on a alors deja fais l'appel vers l'API
        }

        if($today != $dayInFile) {
            $callAPI = FALSE; // on pas encore fais dappel vers l'API aujourdhui
            ftruncate($handle,0); //on supprime le contenu du fichier pour faire apparaitre uniquement les appels d'aujourdhui
        }
        
        /*On ferme le fichier*/
        fclose($handle);

        return $callAPI;

    }

?>