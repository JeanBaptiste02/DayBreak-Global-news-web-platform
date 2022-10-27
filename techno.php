<?php
$titre = "DailyBreaks";
$link = "./css/style.css";
require "./include/header.inc.php";
?>

        <main>
            <section>

            <div class="section-content blog">

                <div class="title">
                    <h2>Technologie</h2>
                </div>

                <div class="cards">
                    <?php
                        $apiKey = "b1ee71d61f11515c4b6928283c0d787b";
                        $url = "https://gnews.io/api/v4/top-headlines?topic=technology&country=fr&token=$apiKey";
                        $res = file_get_contents($url);
                        $newsData = json_decode($res, true);
                        foreach($newsData['articles'] as $news) {
                            echo "<div class='card'> \n";
                                echo "<div class='image-section'> \n";
                                    $urlPicture = $news['image'];
                                    echo "<img src='$urlPicture' alt='image de la news' width='100' height='200'/> \n";
                                echo "</div> \n";
                                echo "<div class='article'> \n";
                                    $titre = $news['title'];
                                    echo "<h4>$titre</h4> \n";
                                    $description = $news['description'];
                                    $description = substr($description, 0, 175);
                                    echo "<p>$description...</p> \n";
                                echo "</div> \n";
                                echo "<div class='blog-view'> \n";
                                    echo "<a href='sports.php' class='button'>Lire plus</a> \n";
                                echo "</div> \n";
                                echo "<div class='posted-date'> \n";
                                    $date = $news['publishedAt'];
                                    $date = substr($date, 0, 10);
                                    $date = strftime('%d-%m-%Y',strtotime($date));
                                    echo "<p>$date</p> \n"; 
                                echo "</div> \n";
                            echo "</div> \n";
                        }
                    ?>
                </div>

            </div>


            </section>
        </main>

        <!-- lien du fichier js -->
        <script src="js/script.js"></script>
<?php
    require "./include/footer.inc.php";
?>
