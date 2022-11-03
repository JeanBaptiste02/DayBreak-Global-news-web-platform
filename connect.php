sesssion_start();

<?php
$titre = "DailyBreaks";
$link = "./css/style.css";
require "./include/header.inc.php";
?>

        <main>  
            <section class="sectContact">

                <h2>Connectez-vous</h2>
                <form class="contact_form" method="POST" action="register.php">
                    <div class="box">
                        <div class="input-box">
                            <div class="content">
                                <span></span>
                                <input type="text" name="email" placeholder="Tapez votre mail">
                                <i class="fa fa-envelope"></i>
                            </div> 
                            <br></br>
                            <div class="content">
                                <span></span>
                                <input type="password" name="pass" placeholder="Tapez votre mot de passe">
                                <i class="fa fa-lock"></i>
                            </div> 
                        </div>
                        <div class="mid">
                            <br></br>
                            <a href="#" style="color:cyan">Forget Password?</a>
                            <br></br>
                            <button name="submit">Se connecter</button>
                            <br></br>
                            <a href="register.php" style="color:cyan">Pas de compte? Inscrivez-vous</a>
                        </div>
                        <br></br>
                    </div>
                </form>
            </section>
        </main>

<?php
        require "./include/footer.inc.php";
?>