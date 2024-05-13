<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/evenements.css" />
    <title>Les evenements</title>
  </head>
  <body>
    <nav>
      <img src="./img/logonavbar.png" alt="" />
      <ul class="desktop_menu">
        <li><a href="/index.php">HOME</a></li>
        <li><a href="/emploi.html">EMPLOIS</a></li>
        <li><a href="/Annuaire.html">ANNUAIRE</a></li>
        <li><a href="/HistoiredeLiut.html">HISTOIRE DE L'IUT</a></li>

        <li>
          <a href="contact.html"><button>CONTACT</button></a>
        </li>
        <li>
          <a href="profil.php"><img src="./img/navbarAccount.svg" alt="" /></a>
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
          <li><a href="#">EMPLOIS</a></li>
          <li><a href="annuaire.html">ANNUAIRE</a></li>
          <li>
            <a href="contact.html"><button>CONTACT</button></a>
          </li>
          <li>
            <a href="profil.php"
              ><img src="./img/navbarAccount.svg" alt=""
            /></a>
          </li>
        </ul>
      </div>
    </nav>

    <section class="hero_section">
      <h1 class="title">Les évenements à l'IUT</h1>
    </section>

    <section class="offres_container">
      <div class="en-tete">
        <h2 class="section_title">Découvrez les évenements à l'IUT</h2>
      </div>
      <div class="offre_container">

        <?php
          session_start();
          include("php/db_connect.php");

          $requete="SELECT evenements.titre, evenements.date, evenements.heure, evenements.description FROM evenements ORDER BY evenements.date ASC"; 
          $result=$db->query($requete);
          while($row = $result->fetch_assoc()){
            $titre=$row['titre'];
            $date=explode("-", $row['date']);
            $jour=date("l", mktime(0, 0, 0, intval($date[1]), $date[2], $date[0]));
            $heure=explode(":", $row['heure']);
            $description=$row['description'];

            echo("<div class='emploi_carte'>
                    <div class='date_titre'>
                      <div class='date'>
                        <h1>$jour</h1>
                        <h2>$date[2]</h2>
                      </div>
                      <div class='titre'>
                        <h2>$titre</h2>
                        <h3>$heure[0]:$heure[1]</h3>
                      </div>
                    </div>
                    <p>$description</p>
                  </div>"
            );
          };
        ?>

      </div>
    </section>

    <footer>
      <div class="socialmediafooter">
        <h3>Social Media</h3>
        <ul>
          <li>
            <a href=""><img src="./img/IconTwitter.svg" alt="" />Twitter</a>
          </li>
          <li>
            <a href=""><img src="./img/IconYoutube.svg" alt="" />Youtube</a>
          </li>
          <li>
            <a href=""><img src="./img/IconFacebook.svg" alt="" />Facebook</a>
          </li>

          <li>
            <a href=""><img src="./img/IconLinkedin.svg" alt="" />Linkedin</a>
          </li>
          <li>
            <a href=""><img src="./img/IconInstagram.svg" alt="" />Instagram</a>
          </li>
        </ul>
      </div>
      <div class="GetHelp">
        <h3>Get Help</h3>
        <ul>
          <li><a href="">Contact the alumni service desk</a></li>
          <li><a href="">Get help searching the alumni directory</a></li>
          <li><a href="">View all contacts</a></li>
          <li><a href="">View all help pages</a></li>
        </ul>
      </div>
      <div class="AboutThisSite">
        <h3>About This Site</h3>
        <ul>
          <li><a href="">Accessibility</a></li>
          <li><a href="">Privacy</a></li>
          <li><a href="">Terms of Use</a></li>
          <li><a href="">Feedback</a></li>
        </ul>
      </div>
    </footer>
    <script src="../main.js"></script>
  </body>
</html>
