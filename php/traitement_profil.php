<!DOCTYPE php>
<?php
    session_start();

    include("db_connect.php");

    $requete="UPDATE `details` SET `description` = '$_POST[metier]' WHERE `details`.`email` = '$_SESSION[user_email]' AND `details`.`type_detail` = 'metier';"; 
    $result=$db->query($requete);

    $requete="UPDATE `details` SET `description` = '$_POST[description]' WHERE `details`.`email` = '$_SESSION[user_email]' AND `details`.`type_detail` = 'biographie';"; 
    $result=$db->query($requete);

    header("Location: ../profil.php");
?>