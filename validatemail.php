<?php 

$titre = "DailyBreaks";
$link = "./css/style.css";
require "./include/header.inc.php";
require "./function/code_verif.php";
?>
<script>
  function refresh(){
     window.setTimeout('window.location="http://daybreak.alwaysdata.net/register.php";');
  }
</script>
<main>
  <section>
    
      <?php
        session_start();
        $parametre=false;
        //verif capcha
        if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
        {
        $status = "<p style='color:#FFFFFF; font-size:20px'>
          <span style='background-color:#46ab4a;'>Votre code captcha est correct.</span></p>";
          $parametre=true; 
          //Envoyé le Mail
          code_verif($_POST["email"]); 
        }else{
          //CAPTCHAT FAUX
        echo "<script>refresh();</script>";  
      }
  echo $status;

      ?>

<form class="contact_form" method="post">
    <div class="box">
        <div class="input-box">
            <div class="content">
                <span></span>
                <input type="number" name="pwd_verif" placeholder="Tapez le numero de vrification envoyé par mail">
                <i class="fa fa-envelope"></i>
            </div> 
            <br></br>
            <div class="mid">
                <button name="submit" type="submit" value="submit">Check my identity</button>
            </div>
                <br></br>
        </div>
    </div>
    </form>
  </section>
</main>

<?php
/*
require_once "bd_connect.php";
if(isset($_POST['submit'])){
    extract($_POST);
    
    if(!empty($pass) && !empty($email)){
        $options = [
            'cost' => 12,
        ];

        $hashpass=password_hash($pass, PASSWORD_BCRYPT, $options);

       
        global $db;

        $sql = "INSERT INTO compte (mail, pwd_hash) VALUES (:email, :pass)";
        $req = $db->prepare($sql);
        $req->execute([
            'email'=>$email,
            'pass'=>$hashpass
        ]);
        echo "Enregistrement réussi";
        
    }
}
*/
?>
<?php
    require "./include/footer.inc.php";
?>
