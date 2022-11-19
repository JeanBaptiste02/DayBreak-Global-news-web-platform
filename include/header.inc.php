<?php
    require "./bd_connect.php";
    require "./news.php";
?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        
        <link rel="shortcut icon" href="/images/sitelogo.png" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
        <meta charset="UTF-8">
        <meta name="author" content="Damodarane Jean-Baptiste" /> 
        <meta name="date" content="2022-09-23" />
        <meta name="keywords" content="Projet de Developpement web" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">

        <title><?php echo $titre;?></title>

        <!-- style lien cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <!-- style avec css -->
        <link rel="stylesheet" href="<?php echo $link ?>"/>

    </head>

    <body>

        <header class="header">

            <a href="index.php" class = "logo">
                <img src="images/logo3.png" alt="">
            </a>

            <nav class="navigbar">
                <a href="index.php" class="active">Home</a>
                <a href="sciences.php" class="active">Sciences</a>
                <a href="techno.php" class="active">Technologie</a>
                <a href="sports.php" class="active">Sports</a>
                <a href="politics.php" class="active">Politiques</a>
                <a href="meteo.php" class="active">Météo</a>
                <a href="divertissement.php" class="active">Divertissement</a>
            </nav>

            <div class="mesicones">
                <div class="fas fa-search" id="search-btn"></div>
                <a href="connect.php"><div class="fa fa-user" id="search-btn"></div></a>
                <div class="fas fa-bars" id="menu-btn"></div>
            </div>

            <div class="search-form">
                <input type="search" id="search-box" placeholder="search here...">
                <label for="search-box" class="fas fa-search"></label>
            </div>

        </header>