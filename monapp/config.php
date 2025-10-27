<?php
$host = "localhost";
$user = "root";   // utilisateur par défaut XAMPP
$pass = "";       // mot de passe par défaut est vide
$db   = "monapp";

// Connexion à MySQL
$conn = mysqli_connect($host, $user, $pass, $db);

// Vérification
if (!$conn) {
    die("❌ Connexion échouée : " . mysqli_connect_error());
}
?>