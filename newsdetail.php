<?php
    $titre = "DailyBreaks";
    $link = "./css/style.css";
    require "./include/header.inc.php";

    if(isset($_POST['idNews']) && !empty($_POST['idNews']) ) {
        $id = $_POST['idNews'];
    }

?>

        <main>

            <section>
                
                <?php

                    /*ON RECUPERE LES DONNEES DANS LA BD*/
                    $result = $db->query("SELECT * FROM news WHERE id = '$id' ");
                    while ($news = $result->fetch()) {
                        
                        $urlPicture = urldecode($news['imageUrl']);
                        //echo "<img src='$urlPicture' alt='image de la news' /> \n";
                    
                        $titre = $news['titre'];

                        $contenu = $news['contenu'];

                        $date = $news['date'];
                        $date = date('Y-m-d', strtotime($date));
                        setlocale(LC_TIME, "fr_FR", "French");
                        $date = strftime("%A %d %B %G", strtotime($date)); 

                        $sourceUrl = $news['sourceUrl'];
                        $sourceName = $news['sourceName'];
                        $sourceNameUrl = $news['sourceNameUrl'];
                        $categorie = $news['categorie'];
                        
                    }
                ?>
                
                    <div class="cardo">
                        <div class="imgBx">
                            <img src=<?php echo $urlPicture; ?> alt="image de la news" />
                        </div>
                        <div class="content">
                            <h2><?php echo $titre; ?></h2>
                            <div class="infoSup">
                                <div class="text">
                                    <p>Source : <a href=<?php echo $sourceNameUrl; ?>><?php echo $sourceName; ?></a></p>
                                    <p>Publié le <?php echo $date; ?></p>
                                </div>
                            </div>
                            <p><?php echo $contenu; ?><a href=<?php echo $sourceUrl; ?> >En savoir plus</a>
                            </p>
                        </div>
                    </div>
                   
                
            </section>   
                
               

        </main>
        
<?php
    require "./include/footer.inc.php";
?>
