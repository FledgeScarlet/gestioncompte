<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestioncompte";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo '<a href="client.php">Accès Client</a><br/>';

$sql = "SELECT id FROM clients ";
$result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        echo '<a href="compte.php?user=' . $row['id'] .'">Afficher Client ' . $row['id'] . '</a><br/>';
    }
?>
