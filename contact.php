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

        <tile>Times of France</title>

        <!-- style lien cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <!-- style avec css -->
        <link rel="stylesheet" href="css/style.css">

    </head>

    <body>

        <header class="header">
            <a href="#" class = "logo">
                <img src="images/logo3.png" alt="">
            </a>

            <nav class="navigbar">
                <a href="#">Home</a>
                <a href="#">Sciences</a>
                <a href="#">Technologie</a>
                <a href="#">Politiques</a>
                <a href="#">Economie</a>
                <a href="#">Sports</a>
                <a href="#">Educations</a>
                <a href="#">Blogs</a>
            </nav>

            <div class="mesicones">
                <div class="fas fa-search" id="search-btn"></div>
                <div class="fa fa-sign-in" id="search-btn"></div>
                <div class="fas fa-bars" id="menu-btn"></div>
            </div>

        </header>

        <main>  
            <section class="sectContact">
                <div class="box">
                    <h2 style=color:orange>Connectez-Vous</h2>
                    <div class="input-box">
                        <div class="content">
                            <text>Mail</text>
                            <span></span>
                            <input type="text">
                            <i class="fa fa-envelope"></i>
                        </div> 
                        <br></br>
                        <div class="content">
                        <text>Password</text>
                            <span></span>
                            <input type="password">
                            <i class="fa fa-lock"></i>
                        </div> 
                    </div>
                    <div class="mid">
                        <br></br>
                        <a href="">Forget Password?</a>
                        <br></br>
                        <button>Sign In</button>
                        <input type="checkbox"> Keep me signed
                    </div>
                    <br></br>
                </div>
            </section>
        </main>


        <!-- lien du fichier js -->
        <script src="js/script.js">

        </script>


            <footer class="myfooter">

                <div class="iconesshare">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>

                <div class="liens">
                    <a href="index.php">home</a>
                    <a href="apropos.php">about</a>
                    <a href="contact.php">contact</a>
                </div>

                <div class="infos">Crée par <span>DAMODARANE Jean-Baptiste &amp; ELUMALAI Sriguru &amp; GUNDUZ Maxime &amp; ZHANG Victor</span> | Licence 3 Informatique | CYU | Tous droits réservés </div>

            </footer>

        
    </body>
</html>