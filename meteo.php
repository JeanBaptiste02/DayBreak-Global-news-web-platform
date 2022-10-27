<?php
$titre = "DailyBreaks";
$link = "./css/style.css";
require "./include/header.inc.php";
?>

        <main>
            <section class="meteo-section">

                <?php
                    $apikey = "8e724e3cf6e8a29c7a4e270e9d419db1";
                    $lat = "49.050966";
                    $lon = "2.100645";
                    $googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?lat=".$lat. "&lon=" .$lon. "&lang=fr&units=metric&APPID=" .$apikey;

                    $ch = curl_init();//initialise une session cURL

                    //mise en place de l'URL et d'autres options
                    curl_setopt($ch, CURLOPT_HEADER, 0);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
                    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                    curl_setopt($ch, CURLOPT_VERBOSE, 0);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

                    $response = curl_exec($ch); //execute la session cURL correspondant

                    curl_close($ch); // ferme la session cURL et libère les ressouces
                    $data = json_decode($response); //recupere une chaine encodee JSON 
                    // print_r($data);
                    // die;

                    $currentTime = time();

                ?>

                <div class="meteo-box">
                    <h2>METEO de la ville de <?php $jsondata->sys->name; ?></h2>
                    <div class="time">
                        <div>Pays : <?php echo $data->sys->country; ?></div>
                        <div><?php echo date("l g:i a", $currentTime); ?></div>
                        <div><?php echo date("jS F, Y", $currentTime); ?></div>
                        <div><?php echo ucwords($data->weather[0]->weather[0]->description); ?></div>
                    </div>  

                    <div class="climat">
                        <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" 
                            class="weather-icon"/> <?php echo $data->main->temp; ?>&deg;
                    </div>  

                    <div>
                        <div>Humidité : <?php echo $data->main->humidity; ?></div>
                        <div>Vitesse du Vent : <?php echo $data->wind->speed; ?></div>
                        <div>Pression : <?php echo $data->main->pressure; ?></div>
                        <div>Description : <?php echo $data->weather[0]->description; ?></div>                        
                    </div>
                </div>

            </section>
        </main>

        <!-- lien du fichier js -->
        <script src="js/script.js"></script>
<?php
    require "./include/footer.inc.php";
?>
