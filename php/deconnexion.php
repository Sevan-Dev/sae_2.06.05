<?php
// Détruire la session active
session_start(); // Démarre la session
session_destroy(); // Détruit la session

// Rediriger vers la page de connexion ou une autre page après la déconnexion
header("Location: ../index.php"); // Redirige vers la page de connexion
exit(); // Arrête l'exécution du script après la redirection
?>