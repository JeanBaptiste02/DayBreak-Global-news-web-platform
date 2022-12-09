<?php
    $titre = "DayBreaks";
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
                                <button id="js-button-tts" class="btnVoix">LIRE</button>
                                <button id="js-button-stop-tts" class="btnVoix">STOP</button>
                            </div>
                        </div>
                        <p id="js-content-tts"><?php echo $contenu; ?><a href=<?php echo $sourceUrl; ?> >En savoir plus</a></p>
                    </div>
                </div>
                   
            </section>  

            <section>
                <div class="section-content2">
                    <div class="title">
                        <h2>Voir aussi</h2>
                    </div>
                    <div class="cards">
                        <?php
                            /*ON RECUPERE LES DONNEES DANS LA BD*/
                            $date = date("Y-m-d", strtotime('-3 day'));
                            $result = $db->query("SELECT * FROM news WHERE date >= '$date' AND id != '$id' AND categorie = '$categorie'");
                            while ($news = $result->fetch()) {
                                echo "<div class='card2'> \n";
                                    echo "<div class='image-section'> \n";
                                        $urlPicture = urldecode($news['imageUrl']);
                                        $urlPicture = str_replace(' ', '%20', $urlPicture);
                                        echo "<img src='$urlPicture' alt='image de la news' width='100' height='200'/> \n";
                                    echo "</div> \n";
                                    echo "<div class='article'> \n";
                                        $titre = $news['titre'];
                                        echo "<h4>$titre</h4> \n";
                                        $description = $news['description'];
                                        $description = substr($description, 0, 175);
                                        echo "<p>$description...</p> \n";
                                    echo "</div> \n";
                                    echo "<div class='blog-view'> \n";
                                        $id = $news['id'];
                                        echo "<form id='test' action='newsdetail.php' method='post'> \n";
                                            echo "<input type='hidden' name='idNews' value='$id'/> \n";
                                            echo "<input type='submit' value='Lire plus' /> \n";
                                        echo "</form> \n";
                                    echo "</div> \n";
                                    echo "<div class='posted-date'> \n";
                                        $date = $news['date'];
                                        $date = date('d-m-Y', strtotime($date));
                                        echo "<p>$date</p> \n"; 
                                    echo "</div> \n";
                                echo "</div> \n"; 
                            }
                            
                        ?>
                    </div>  
                </div>

                <div class="btncontainer">
                    <button class="btnLoad">Charger Plus</button>
                </div>
                
            </section>
               

        </main>
        
<?php
    require "./include/footer.inc.php";
?>
