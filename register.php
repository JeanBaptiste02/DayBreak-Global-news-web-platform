<?php 

$titre = "DailyBreaks";
$link = "./css/style.css";
require "./include/header.inc.php";
?>

<main>  
            <section class="sectContact">

            <h2>Inscrivez-vous</h2>
            <form class="contact_form" method="POST">
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
                    <br></br>
                    <div class="mid">
                        <br></br>
                        <button name="submit">S'inscrire</button>
                    </div>
                    <br></br>
                </div>
            </section>
        </main>

<?php
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
        echo "Enregistrement reussi";
        
    }
}

?>


<?php
        require "./include/footer.inc.php";
?>