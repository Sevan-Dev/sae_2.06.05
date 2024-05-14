<?php
    session_start();

    include("db_connect.php");

    // Mise à jour de 'metier'
    $requete = $db->prepare("UPDATE `details` SET `description` = ? WHERE `details`.`email` = ? AND `details`.`type_detail` = 'metier'");
    $requete->bind_param("ss", $_POST['metier'], $_SESSION['user_email']);
    $requete->execute();

    // Mise à jour de 'biographie'
    $requete = $db->prepare("UPDATE `details` SET `description` = ? WHERE `details`.`email` = ? AND `details`.`type_detail` = 'biographie'");
    $requete->bind_param("ss", $_POST['description'], $_SESSION['user_email']);
    $requete->execute();


    header("Location: ../profil.php");
?>