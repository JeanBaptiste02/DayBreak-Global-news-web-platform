<?php
$titre = "DailyBreaks";
$link = "./css/style.css";
require "./include/header.inc.php";
?>

<?php
    if (isset($_POST['message'])) {
        $retour = mail('gunduz.maxime.ziya@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From:'.$_POST['email']. "\r\n" . 'Reply-to: ' . $_POST['email']);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>

<?php
        require "./include/footer.inc.php";
?>