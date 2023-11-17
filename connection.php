<?php
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$basededonnees = "bank";

// Établir une connexion
$conn = mysqli_connect($serveur, $utilisateur, $motdepasse, $basededonnees);

// Vérifier la connexion
if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

?>