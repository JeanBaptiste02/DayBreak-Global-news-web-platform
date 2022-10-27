session_start();

<?php

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $dsn = "pgsql:host=$host;port=5432;dbname=$db;";
        $db = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

        $sql = "SELECT * FROM compte where mail = '$email' ";
        $result = $db->prepare($sql);

        if($result->rowCount()>0){

        }
        else{
            $pass = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO compte (mail, mdp) VALUES ('$email', $pass')";
            $req = $db->prepare($sql);
            $req->execute();
            echo "Enregistrement réussi";
        }
    }

?>