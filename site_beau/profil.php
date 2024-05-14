<?php
    session_start();
    include("php/db_connect.php");
    if (!isset($_SESSION['user_email'])){
      header('Location: login.php');
      exit;
    }

    $requete="SELECT utilisateurs.no_type_compte FROM utilisateurs WHERE utilisateurs.email='$_SESSION[user_email]'"; 
    $result=$db->query($requete);
    $row = $result->fetch_assoc();

    if ($row['no_type_compte'] == '1'){
      header('Location: profil_admin.php');
    }

    $requete="SELECT details.description FROM details WHERE details.email='$_SESSION[user_email]' AND details.type_detail='metier'"; 
    $result=$db->query($requete);
		$row = $result->fetch_assoc();
		$metier=$row['description'];

    $requete="SELECT details.description FROM details WHERE details.email='$_SESSION[user_email]' AND details.type_detail='biographie'"; 
    $result=$db->query($requete);
		$row = $result->fetch_assoc();
		$biographie=$row['description'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profil.css">
    <title>Votre Profil</title>
</head>
<body>
<nav>
        <img src="img/logonavbar.png" alt="" />
        <ul class="desktop_menu">
          <li><a href="index.php">ACCUEIL</a></li>
          <li><a href="evenements.php">EVENEMENTS</a></li>
          <li><a href="Annuaire.html">ANNUAIRE</a></li>
          <li><a href="HistoiredeLiut.html">HISTOIRE DE L'IUT</a></li>
          <li>
            <a href="#"><button>CONTACT</button></a>
          </li>
          <li>
            <a href="profil.php"><img src="img/navbarAccount.svg" alt="" /></a>
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
            <li><a href="index.php">ACCUEIL</a></li>
            <li><a href="evenements.php">EVENEMENTS</a></li>
            <li><a href="annuaire.html">ANNUAIRE</a></li>
            <li><a href="HistoiredeLiut.html">HISTOIRE DE L'IUT</a></li>
            <li>
              <a href="#"><button>CONTACT</button></a>
            </li>
            <li>
              <a href="profil.php"><img src="img/navbarAccount.svg" alt="" /></a>
            </li>
          </ul>
        </div>
      </nav>

      <section class="main_section">
        <div class="background"></div>
        <div class="main_profil_container">
            <div class="profil_picture"></div>
            <div class="name_container">
                <h1 class="name"><?php echo("$_SESSION[prenom] $_SESSION[nom]") ?></h1>
                <p class="email"><?php echo($_SESSION['user_email']) ?></p>
            </div>
            <div class="button_container">
              <form method="post" action="php/modifier_profil.php">
                <button class="green-btn">Modifier</button>
              </form>
            </div>

              <form method="post" action="php/deconnexion.php">
                  <button>Deconnexion</button>
              </form>

        </div>
        <div class="metier_container">
            <h2 class="meiter_title">Votre métier</h2>
            <?php echo($metier) ?>
        </div>
        <div class="description_container">
            <h2 class="biographie">Bigraphie</h2>
            <?php echo($biographie) ?>
        </div>

      </section>

      <script src="main.js"></script>
</body>
</html>