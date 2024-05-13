<!DOCTYPE php>
<?php
    include("php/db_connect.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/index.css" />
    <title>Document</title>
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
          <li><a href="#">HOME</a></li>
          <li><a href="emploi.html">EMPLOIS</a></li>
          <li><a href="annuaire.html">ANNUAIRE</a></li>
          <li>
            <a href="contact.html"><button class="green-btn">CONTACT</button></a>
          </li>
          <li>
            <a href="profil.php"><img src="./img/navbarAccount.svg" alt="" /></a>
          </li>
        </ul>
      </div>
    </nav>

    <section class="hero_section">
      <div class="filter"></div>
      <div class="title_container">
        <h1 class="title">Bienvenu sur notre plateforme d'anciens élèves</h1>
      </div>
      <div class="text-container">
        <p class="description">
          "Rejoignez notre communauté dynamique d'anciens élèves, où les souvenirs se mêlent à de nouvelles opportunités. Connectez-vous avec d'anciens camarades, découvrez des histoires inspirantes et explorez les chemins variés que nos anciens ont empruntés. Ensemble, nous façonnons l'avenir, enrichis par notre passé commun. 
        </p>
      </div>
      <div class="buttons-container">
        <button class="white-btn">Accédez au site de la charte graphique</button>
      </div>
    </section>

    <section class="annuaire_setion">
      <div class="left">
        <h2>Retrouvez vos anciens camarades d'école !</h2>
        <p class="description">
          Plongez dans la nostalgie et renouez avec vos anciens amis de
          promotion grâce à notre fonction de recherche conviviale. Explorez
          notre base de données et revivez les souvenirs d'école en retrouvant
          facilement ceux qui ont partagé cette période inoubliable avec vous.
        </p>
        <div class="buttons-container">
          <button class="white-btn">Retrouvez vos amis</button>
          <button class="green-btn">Rejoignez nous</button>
        </div>
      </div>
      <div class="right">
        <div class="img_container"></div>
      </div>
    </section>

    <section class="emplois_section">
      <div class="left">
        <h2>Trouvez votre nouvel emploi: ressources pour les anciens élèves</h2>
        <p class="description">
          Explorez nos ressources dédiées pour trouver le stage parfait qui
          correspond à vos intérêts et ambitions professionnelles. Que vous
          soyez à la recherche d'une expérience dans votre domaine d'études ou
          que vous souhaitiez explorer de nouvelles opportunités, notre
          plateforme vous connecte avec des entreprises et des organisations qui
          valorisent l'expertise et l'expérience de nos anciens élèves.
          Découvrez des offres exclusives, des conseils de carrière
          personnalisés et des opportunités uniques pour vous démarquer sur le
          marché du travail.
        </p>
        <button class="outlined-green-btn">Explorez les Offres d'Emploi</button>
      </div>
      <div class="right">
        <div class="img_container"></div>
      </div>
    </section>

    <section class="histoire_section">
      <div class="left">
        <div class="img_container"></div>
      </div>
      <div class="right">
        <h2>
          Plongez dans l'histoire: les racines profondes de notre université
        </h2>
        <p class="description">
          Explorez les origines fascinantes de notre école à travers cet article
          captivant. De sa fondation humble à ses réalisations remarquables,
          découvrez comment notre institution a façonné des générations
          d'esprits brillants. Plongez-vous dans les anecdotes inspirantes, les
          traditions chères et les moments marquants qui ont contribué à forger
          l'identité unique de notre école.
        </p>
        <div class="buttons-container">
          <button class="green-btn">Lire la suite</button>
          <button class="white-btn">Voir nos articles</button>
        </div>
      </div>
    </section>

    <section class="form_section">
        <h2 class="green_underlined">Prenez contact avec notre chef de département !</h2>
        <div class="first_description_form">
          <div class="name_container text_container">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="border_bottom">
          </div>
          <div class="email_container text_container">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="border_bottom">
          </div>
          <div class="promo_container text_container">
            <label for="annee_promo">Anne de promotion</label>
            <input type="number" name="annne_promo" id="annee_promo" class="border_bottom">
          </div>
        </div>
        <div class="message_container text_container">
            <label for="message">Message</label>
            <textarea name="message"></textarea>
        </div>
        <button class="green_btn">Envoyer</button>
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
