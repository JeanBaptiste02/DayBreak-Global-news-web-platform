<?php
   
    $servername = 'mysql-daybreak.alwaysdata.net';
    $dbname = 'daybreak_bd';
    $username = 'daybreak';
    $password = 'c41ez56s1x@';
   
    try {
        $db = new PDO ('mysql:host='.$servername.';dbname='.$dbname, $username, $password);
    } catch (PDOExecepetion $e) {
        echo "Erreur :" . $e->getMessage();
    }
    echo 'Connexion réussie';

?>