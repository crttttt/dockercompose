<?php
echo "<h1>Test de la Stack Docker Compose</h1>";

echo "<p>✅ PHP fonctionne (Version " . phpversion() . ")</p>";

$servername = "db";
$username = "user";
$password = "password";
$dbname = "company";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
 die("<p style='color:red'>❌ Echec connexion MySQL : " . $conn->connect_error . "</p>");
}

echo "<p style='color:green'>✅ Connexion MySQL OK</p>";
?>
