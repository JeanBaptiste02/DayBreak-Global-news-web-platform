<?php
    

    $host= 'localhost';
    $db = 'dbetu';
    $user = 'etu';
    $password = '**************';

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $dsn = "pgsql:host=$host;port=5432;dbname=$db;";
        $db = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

        $sql = "SELECT * FROM user where email = '$email' ";
        $result = $db->prepare($sql);

        if($result->rowCount()>0){

        }
        else{
            $pass = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO user (mail, mdp) VALUES ('$email', $pass')";
            $req = $db->prepare($sql);
            $req->execute();
            echo "Enregistrement réussi";
        }
    }

?>