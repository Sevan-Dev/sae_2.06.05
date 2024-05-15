<?php
    session_start();

    include("db_connect.php");
    
    if(!empty($_POST['titre_event'] and $_POST['date_event'] and $_POST['time_event'] and $_POST['description_event'])){

        // Ajout de l'event
        $requete = $db->prepare("INSERT INTO `evenements` (`titre`, `date`, `heure`, `description`) VALUES (?, ?, ?, ?)");
        $requete->bind_param("ssss", $_POST['titre_event'], $_POST['date_event'], $_POST['time_event'], $_POST['description_event']);
        $requete->execute();

        header("Location: ../evenements.php");
    }
    else {
        $error = "Information(s) manquante(s)";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <title>admin</title>
</head>
<body>
    <nav>
        <img src="../img/logonavbar.png" alt="" />
        <ul class="desktop_menu">
          <li><a href="/index.php">HOME</a></li>
        <li><a href="/emploi.html">EMPLOIS</a></li>
        <li><a href="/Annuaire.html">ANNUAIRE</a></li>
        <li><a href="/HistoiredeLiut.html">HISTOIRE DE L'IUT</a></li>

        <li>
          <a href="contact.html"><button>CONTACT</button></a>
        </li>
        <li>
          <a href="profil.php"><img src="../img/navbarAccount.svg" alt="" /></a>
        </li>
      </ul>
      <div class="container nav-container">
        <input class="checkbox" type="checkbox" name="" id="" />
        <div class="hamburger-lines">
          <span class="line line1"></span>
          <span class="line line2"></span>
          <span class="line line3"></span>
        </div>
      </div>

      <div class="mobile_menu">
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a href="emploi.html">EMPLOIS</a></li>
          <li><a href="annuaire.html">ANNUAIRE</a></li>
          <li>
            <a href="contact.html"><button>CONTACT</button></a>
          </li>
          <li>
            <a href="profil.php"><img src="../img/navbarAccount.svg" alt="" /></a>
          </li>
          </ul>
        </div>
      </nav>

      <section class="main_section">
        <div class="background"></div>
        <div class="main_profil_container">
            <div class="profil_picture"></div>
            <div class="name_container">
                <p class="admin">Admin</p>
                <p><?php echo("$_SESSION[prenom] $_SESSION[nom]") ?></p>
            </div>
            <form class="btn-deco" method="post" action="php/deconnexion.php">
                <button>Deconnexion</button>
            </form>
            
        </div>
        <form method="post" action="traitement_event.php">
        <div class="add_event_container">
            <h1>Quel est le prochain évènement</h1>
            <div class="main_container">
                <div class="titre_container ctn">
                    <label for="titre_event">Titre</label>
                      <input type="text" name="titre_event" id="titre_event">
                </div>
                <div class="date_container ctn">
                    <label for="date_event">Date</label>
                    <input type="date" name="date_event" id="date_event">
                </div>
                <div class="time_container ctn">
                    <label for="time_event">Heure</label>
                    <input type="time" name="time_event" id="time_event">
                </div>
            </div>
            <div class="description_container ctn">
                <label for="description_event">Description</label>
                <textarea name="description_event" id="description_event"></textarea>
            </div>
            <div class="btn_div">
                <p style="color:red; margin:10px;"><?php echo($error) ?></p>
                <button class="green-btn">Valider</button>
            </div>
            </form>
        </div>

      </section>

      
      <script src="main.js"></script>
</body>
</html>