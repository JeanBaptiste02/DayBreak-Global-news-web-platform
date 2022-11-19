<?php 

$titre = "DailyBreaks";
$link = "./css/style.css";
require "./include/header.inc.php";
?>
 
<main>  
            <section class="sectContact">

            <h2>Register now</h2>
            <form class="contact_form" action="validatemail.php" method="post">
                <div class="box">
                    <div class="input-box">

                    <table>
                        <tr>
                        <td>
                        <label>Enter the text in image</label>
                        <input name="captcha" type="text">
                        <img src="captcha.php" style="vertical-align: middle;"/>
                        </td>
                        </tr>
                        <tr>
                    </table>
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
                    
                    <br></br>
                    <div class="mid">
                    <button name="submit" type="submit" value="submit">Register</button>
                    </div>
                    <br></br>
                </div>
            </section>
        </main>

<?php
    require "./include/footer.inc.php";
?>
