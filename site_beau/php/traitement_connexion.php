<?php
    session_start();

    include "db_connect.php";

	if(!empty($_POST['email'] and $_POST['mdp'])){
		$email = $_POST['email'];
		$mdp = $_POST['mdp'];        
		
		$requete="SELECT utilisateurs.mdp FROM utilisateurs WHERE utilisateurs.email='$email'";
		$result=$db->query($requete);
	

		$row = $result->fetch_assoc();
        if($row['mdp'] == $mdp) {
            $_SESSION['user_email'] = $email;

            $requete="SELECT utilisateurs.nom, utilisateurs.prenom FROM utilisateurs WHERE utilisateurs.email='$_SESSION[user_email]'"; 
            $result=$db->query($requete);
		    while($row = $result->fetch_assoc()){
                $nom=$row['nom'];
                $prenom=$row['prenom'];
                
                $_SESSION['nom'] = $nom;
                $_SESSION['prenom'] = $prenom;
            };

			header("Location: ../index.php");
		}
		else{
			$error= "Mot de passe ou email incorrect";
		}
	}
	
	else{
		$error= "Information(s) manquante(s)";
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>Modern Login Page | AsmrProg</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form method="post" action="traitement_creation.php">
                <h1>Create Account</h1>
                <input type="text" placeholder="Nom" name="nom">
                <input type="text" placeholder="Prenom" name="prenom">
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="mdp">
                <button>Créer un compte</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form method="post" action="traitement_connexion.php">
                <h1>Sign In</h1>
                    <input type="email" placeholder="Email" name="email">
                    <input type="password" placeholder="Password" name="mdp">
                    <p style="color:red"><?php echo "$error"; ?></p>
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

    <script src="../login.js"></script>
</body>

</html>