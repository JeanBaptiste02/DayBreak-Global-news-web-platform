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
                            /*PAGINATION */
                            $newsParPage = 9; //nbr de news par page
                            $newsTotalesReq = $db->query('SELECT id FROM news WHERE categorie = "science" '); 
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
                            $result = $db->query("SELECT * FROM news WHERE categorie = 'science' LIMIT $depart,$newsParPage");
                            while ($news = $result->fetch()) {
                                echo "<div class='card'> \n";
                                    echo "<div class='image-section'> \n";
                                        $urlPicture = $news['imageUrl'];
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
                                        echo "<a href='sports.php' class='button'>Lire plus</a> \n";
                                    echo "</div> \n";
                                    echo "<div class='posted-date'> \n";
                                        $date = $news['date'];
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
                        for($i=1; $i<=$pageTotales; $i++) {
                            if($i == $pageCourante) {
                                echo '<a class="active">'.$i.'</a> ';
                            } else {
                                echo '<a href="sciences.php?page='.$i.'">'.$i.'</a> ';
                            }
                        }
                    ?>
                </div>
               
            </section>

        </main>

<?php
    require "./include/footer.inc.php";
?>
