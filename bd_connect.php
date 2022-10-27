<?php
    
    define ("HOST","mysql-daybreak.alwaysdata.net");
    define ("USER","daybreak");
    define ("PASSWORD","c41ez56s1x@");
    define ("DBNAME","daybreak_bd");

    try{
        $db = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME, USER, PASSWORD);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connection reussi";
    } catch(PDOException $e) {
        echo $e;
    }

?>