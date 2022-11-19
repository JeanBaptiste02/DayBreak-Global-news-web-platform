<?php
    $titre = "DailyBreaks";
    $link = "./css/style.css";
    require "./include/header.inc.php";
?>

        <main>

            <section>
                <?php
                    if (isset($_POST['pseudo'])&& isset($_POST['mail']) && isset($_POST["subject"]) && isset($_POST['message'])) {

                        $retour = mail('gunduz.maxime.ziya@gmail.com', $_POST["subject"],$_POST['message'],$_POST['mail']);
                        if($retour)
                            echo '<p>Votre message a bien été envoyé.</p>';
                    }
                ?>
            </section>

        </main>

<?php
        require "./include/footer.inc.php";
?>