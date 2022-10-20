<?php
$titre = "DailyBreaks";
$link = "./css/style.css";
require "./include/header.inc.php";
?>

<main>
    <section>
        <?php
            if (isset($_POST['message'])) {
                $retour = mail('viknesh7802@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From:'.$_POST['email']. "\r\n" . 'Reply-to: ' . $_POST['email']);
                if($retour)
                    echo '<p>Votre message a bien été envoyé.</p>';
            }
        ?>
    </section>
</main>


<?php
        require "./include/footer.inc.php";
?>