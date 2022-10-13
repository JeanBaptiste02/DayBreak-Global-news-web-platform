<?php
$titre = "DailyBreaks";
$link = "./css/style.css";
require "./include/header.inc.php";
?>

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


<?php
        require "./include/footer.inc.php";
?>