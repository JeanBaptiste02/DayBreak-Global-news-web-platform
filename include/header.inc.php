<?php
    include "./include/functions.inc.php"
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <link rel="shortcut icon" href="/images/sitelogo.png" />
        <meta charset="UTF-8">
        <meta name="author" content="Damodarane Jean-Baptiste" /> 
        <meta name="date" content="2022-09-23" />
        <meta name="keywords" content="Projet de Developpement web" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">

        <tile><?php echo $titre;?></title>

        <!-- style lien cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <!-- style avec css -->
        <link rel="stylesheet" href="<?php echo $link ?>"/>

    </head>

    <body>

        <header class="header">
            <a href="#" class = "logo">
                <img src="images/logo3.png" alt="">
            </a>

            <nav class="navigbar">
                <a href="index.php">Home</a>
                <a href="sciences.php">Sciences</a>
                <a href="technologies.php">Technologies</a>
                <a href="sciences.php">Economie</a>
                <a href="sports.php">Sports</a>
                <a href="sante.php">Santé</a>
                <a href="divertissement.php">Divertissement</a>
            </nav>

            <div class="mesicones">
                <div class="fas fa-search" id="search-btn"></div>
                <div class="fa fa-sign-in" id="search-btn"></div>
                <div class="fas fa-bars" id="menu-btn"></div>
            </div>

        </header>