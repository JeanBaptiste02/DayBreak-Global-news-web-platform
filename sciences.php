<?php
    $titre = "DailyBreaks";
    $link = "./css/style.css";
    require "./include/header.inc.php";
?>

        <main>

            <section>
                <div class="section-content blog">
                    <div class="title">
                        <h2>Sciences</h2>
                    </div>
                    <div class="cards">
                        <?php
                            $date = date("Y-m-d", strtotime('-3 day'));
                            /*PAGINATION */
                            $newsParPage = 9; //nbr de news par page
                            $newsTotalesReq = $db->query("SELECT id FROM news WHERE date >= '$date' AND categorie = 'science' "); 
                            $newsTotales = $newsTotalesReq->rowCount(); //nbr totale de news
                            $pageTotales = ceil($newsTotales/$newsParPage);

                            if(isset($_GET['page']) && !empty($_GET['page']) && $_GET['page'] > 0 && $_GET['page'] <= $pageTotales) {
                                $_GET['page'] = intval($_GET['page']); // pour etre sûr que c'est un entier
                                $pageCourante = $_GET['page'];
                            } else {
                                $pageCourante = 1;
                            }

                            $depart = ($pageCourante-1) * $newsParPage;

                            /*ON RECUPERE LES DONNEES DANS LA BD*/
                            $result = $db->query("SELECT * FROM news WHERE date >= '$date' AND  categorie = 'science' ORDER BY date DESC LIMIT $depart,$newsParPage");
                            while ($news = $result->fetch()) {
                                echo "<div class='card'> \n";
                                    echo "<div class='image-section'> \n";
                                        $urlPicture = urldecode($news['imageUrl']);
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

                <div class="pagination">
                    <?php
                        /*LES LIENS PERMETTANT DE PARCOURIR LES PAGES*/
                        $nbrMaxGD = 1;

                        if($pageTotales != 1) {
                            //--------------------------------------------------- a gauche de la page courante
                            if($pageCourante > 1) {
                                $precedent = $pageCourante - 1;
                                echo '<a href="sciences.php?page='.$precedent.'">Précédent</a> ';
                            }

                            if($pageCourante == 3) {
                                echo '<a href="sciences.php?page=1">1</a> '; 
                            }

                            if($pageCourante > 3) {
                                echo '<a href="sciences.php?page=1">1</a> '; 
                                echo '<span class="petitPoint">...</span> '; 
                            }

                            for($i = $pageCourante - $nbrMaxGD; $i <$pageCourante; $i++) {
                                if($i > 0) {
                                    echo '<a href="sciences.php?page='.$i.'">'.$i.'</a> '; 
                                }
                            }

                            echo '<a class="active">'.$i.'</a> '; // la page courante

                            // -------------------------------------------------- a droite de la page courante
                            for($i = $pageCourante + 1; $i <=$pageTotales; $i++) {
                                if($i < $pageCourante + $nbrMaxGD + 1) {
                                    echo '<a href="sciences.php?page='.$i.'">'.$i.'</a> '; 
                                }   
                            }

                            if($pageCourante < $pageTotales - 2) {
                                echo '<span class="petitPoint">...</span> '; 
                                echo '<a href="sciences.php?page='.$pageTotales.'">'.$pageTotales.'</a> '; 
                            }

                            if($pageCourante == $pageTotales - 2) {
                                echo '<a href="sciences.php?page='.$pageTotales.'">'.$pageTotales.'</a> ';
                            }
                            
                            if($pageCourante != $pageTotales) {
                                $suivant = $pageCourante + 1;
                                echo '<a href="sciences.php?page='.$suivant.'">Suivant</a> '; 
                            }
                        }
                    ?>
                </div>
               
            </section>

        </main>

<?php
    require "./include/footer.inc.php";
?>
