<?php
$titre = "DailyBreaks";
$link = "./css/style.css";
require "./include/header.inc.php";
?>

<!--
        <main>  
            <section class="sectContact">

            <h2>Connectez-vous</h2>
            <form class="contact_form" method="POST" action="login.php">
                <div class="box">
                    <div class="input-box">
                        <div class="content">
                            <span></span>
                            <input type="text" name="text" placeholder="Tapez votre mail">
                            <i class="fa fa-envelope"></i>
                        </div> 
                        <br></br>
                        <div class="content">
                            <span></span>
                            <input type="password" name="password" placeholder="Tapez votre mot de passe">
                            <i class="fa fa-lock"></i>
                        </div> 
                    </div>
                    <div class="mid">
                        <br></br>
                        <a href="#">Forget Password?</a>
                        <br></br>
                        <button name="submit">Se connecter</button>
                    </div>
                    <br></br>
                </div>
            </section>
        </main>
-->
<main>
    <section>
    <div>
        <div>
            <form method="post" action="PHPMailer/mail.php">
            <label for="pseudo">Pseudo :</label>
                <input type="text" id="pseudo" name="pseudo" required>
            <label for="mail">Mail :</label>
                <input type="mail" id="mail" name="mail" required>

                <label><p>Vous pouvez vous envoyé un message ici !</p></label>
                    <textarea rows="10" cols="30" name="message" required></textarea>
                <input type="submit">

            
            </form>

        </div>
    </div>
    </section>
</main>



        <!-- lien du fichier js -->
        <script src="js/script.js">

        </script>


<?php
        require "./include/footer.inc.php";
?>