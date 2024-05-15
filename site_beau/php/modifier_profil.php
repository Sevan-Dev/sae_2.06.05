<?php
    include("db_connect.php");
    session_start();
    
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
    <link rel="stylesheet" href="../css/profil.css">
    <title>Votre Profil</title>
</head>
<body>
    <nav>
        <img src="../img/logonavbar.png" alt="" />
        <ul class="desktop_menu">
          <li><a href="">ACCUEIL</a></li>
          <li><a href="">ACTUS</a></li>
          <li><a href="">EMPLOIS</a></li>
          <li><a href="">ANNUAIRE</a></li>
          <li>
            <a href=""><button>CONTACT</button></a>
          </li>
          <li>
            <a href=""><img src="../img/navbarAccount.svg" alt="" /></a>
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
            <li><a href="">ACCUEIL</a></li>
            <li><a href="">ACTUS</a></li>
            <li><a href="">EMPLOIS</a></li>
            <li><a href="">ANNUAIRE</a></li>
            <li>
              <a href=""><button>CONTACT</button></a>
            </li>
            <li>
              <a href=""><img src="./img/navbarAccount.svg" alt="" /></a>
            </li>
          </ul>
        </div>
      </nav>
    
      <section class="main_section">
        <div class="background"></div>
            <div class="main_profil_container">
                <div class="profil_picture"></div>
                <div class="name_container"></div>
                <div class="button_container">
                    <form method="post" action="../profil.php">
                        <button>Annuler</button>
                    </form>
                </div>
        <form method="post" action="traitement_profil.php">
            <button class="green-btn">Valider</button>
            </div>
            <div class="metier_container">
                <h2 class="meiter_title">Votre métier</h2>
                <input type="text" name="metier" id="metier" class="metier_input" value="<?php echo($metier); ?>">
            </div>
            <div class="description_container">
                <h2 class="biographie">Bigraphie</h2>
                <textarea name="description" id="description_area"><?php echo($biographie); ?></textarea>
            </div>
        </form>
      </section>

      <script src="main.js"></script>
</body>
</html>