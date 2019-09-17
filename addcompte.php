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
$solde = $_POST['solde'] ;
$ncompte = $_POST['ncompte'] ;
$idclient = $_POST['idclient'] ;
$sql = "INSERT INTO comptebancaire (solde, ncompte, idclient) VALUES (' $solde ', ' $ncompte ', ' $idclient ')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
    <br>
    <a href="index.php"> retour</a><br><?php
