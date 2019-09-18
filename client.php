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

$sql = "SELECT id, prenom, nom, datenaissance FROM clients";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Client: " . $row["nom"]. " " . $row["prenom"]. " - Née le: " . $row["datenaissance"]."<br>";
		echo '<a href="ajoutcompte.php?idclient=' . $row['id'] . '">Ajouter un compte</a><br> ';
		echo '<a href="compte.php?user=' . $row['id'] .'">Affichage des compte </a><br/><br>';
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<br>
<a href="index.php"> retour</a><br>