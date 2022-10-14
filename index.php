<?php
$titre = "DailyBreaks";
$link = "./css/style.css";
require "./include/header.inc.php";
?>

        <main>  
            <section>
                <?php
                  echo getImages();
                ?>
            </section>
        </main>

        <!-- lien du fichier js -->
        <script src="js/script.js"></script>
<?php
    require "./include/footer.inc.php";
?>
