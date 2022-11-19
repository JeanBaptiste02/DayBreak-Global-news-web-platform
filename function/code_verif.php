<?php
function code_verif($email){
    // Stockez toutes les lettres possibles dans une chaîne.
    $str = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomStr = ''; 
  
    // Générez un index aléatoire de 0 à la longueur de la chaîne -1.
    for ($i = 0; $i < 10; $i++) { 
        $index = rand(0, strlen($str) - 1); 
        $randomStr .= $str[$index]; 
    } 
    //Envoyé le mail avec le code de verification
    $dest=$email;
    $objet="Activation code";
    $message="
       Hello
       Please find below the verification code to activate your Daybreak account.

       Your Activation code :". $randomStr ." 
       Best regards:
       Daybreaks Team
    ";
    $entetes="From: Daybreaks.Contact@gmail.com";
   
    
    if(mail($dest,$objet,$message,$entetes))
       echo "Le mail vous a étais envoyé a l'adresse mail ".$dest;
    else
       echo "Un problème est survenu.";
    exit;
    
} 

?>