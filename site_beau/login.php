<!DOCTYPE php>
<?php
    include("php/db_connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./css/login.css">
    <title>Modern Login Page | AsmrProg</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form method="post" action="php/traitement_creation.php">
                <h1>Créer un compte</h1>
                <input type="text" placeholder="Nom" name="nom">
                <input type="text" placeholder="Prenom" name="prenom">
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="mdp">
                <button>Créer un compte</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form method="post" action="php/traitement_connexion.php">
                <h1>Connexion</h1>
                    <input type="email" placeholder="Email" name="email">
                    <input type="password" placeholder="Password" name="mdp">
                <button>Connexion</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Bienvenue !</h1>
                    <p>Inscrivez-vous avec vos informations personnelles pour utiliser toutes les fonctionnalités du site</p>
                    <button class="hidden" id="login">Connexion</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Content de te revoir !</h1>
                    <p>Entrez vos informations personnelles pour utiliser toutes les fonctionnalités du site</p>
                    <button class="hidden" id="register">Créer un compte</button>
                </div>
            </div>
        </div>
    </div>

    <script src="login.js"></script>
</body>

</html>