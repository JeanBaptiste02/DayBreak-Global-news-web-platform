<?php
$titre = "DayBreaks";
$link = "./css/style.css";
require "./include/header.inc.php";
?>

<main>
  <section class="meteo-section">
      <!----------------------------------------------Meteo d'aujourd'hui----------------------------------------------->
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
          <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="weather-icon1"/> <?php echo $data->main->temp; ?>&deg;
        </div>  
        <div>
          <div>Humidité : <?php echo $data->main->humidity; ?></div>
            <div>Vitesse du Vent : <?php echo $data->wind->speed; ?></div>
            <div>Pression : <?php echo $data->main->pressure; ?></div>
            <div>Description : <?php echo $data->weather[0]->description; ?></div>  
          </div>
     </div>


      <!----------------------------------------------Meteo des jours a venir----------------------------------------------->

      
      <?php
        $city    = $jsondata->sys->name;
        $country = $data->sys->country;;
        $url     = 'http://api.openweathermap.org/data/2.5/forecast/daily?q=' . $city . ',' . $country . '&units=metric&cnt=7&lang=en&appid=c0c4a4b4047b97ebc5948ac9c48c0559';
        $json    = file_get_contents( $url );
        $data    = json_decode( $json, true );
        $data['city']['name'];

        $mydays=['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche'];
              
        echo '<table style="padding-top:9%;"><thead><tr>';
        foreach($mydays as $myval){
          echo '<th> <h3 style="color:white; text-align:center;"> La température pour '.  $myval .'</h3> </th>';
        }
        echo "</tr></thead>";
        echo "<tbody><tr>";
        foreach ( $data['list'] as $day => $value ) {
          echo "<td style='color:white; text-align:center;'>";
          echo '<img src="http://openweathermap.org/img/w/' . $value['weather'][0]['icon'] . '.png" class="weather-icon" />';
          echo 'Températeure max :'. $value['temp']['max'] . '<br />';
          echo 'Températeure min :'. $value['temp']['min'] . '<br />';
          echo '<div>Description :' . $value['weather'][0]['description'] . '</div>';
          echo "</td>";
        }
        echo "</tr></tbody>";
        echo "</table>";
      ?>
  </section>
</main>


<!-- lien du fichier js -->
<script src="js/script.js"></script>


<?php
    require "./include/footer.inc.php";
?> 