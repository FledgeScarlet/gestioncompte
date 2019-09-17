<?php
$servername = "db:3306";
$username = "root";
$password = "Azerty01";
$dbname = "gestioncompte";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$nom = $_POST['nom'] ;
$prenom = $_POST['prenom'] ;
$dn = $_POST['dn'] ;
$sql = "INSERT INTO clients (nom, prenom, datenaissance) VALUES (' $nom ', ' $prenom ', ' $dn ')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>