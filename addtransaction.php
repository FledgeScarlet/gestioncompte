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
$date = $_POST['date'] ;
$montant = $_POST['montant'] ;
$type = $_POST['type'] ;
$idc = $_POST['idc'] ;
$sql = "INSERT INTO transaction (date, montant, type, idc) VALUES (' $date ', ' $montant ', $type, '$idc ')";
$result = $conn->query($sql);
$sql2 = "SELECT solde FROM comptebancaire WHERE idcb=$idc";
$result2 = $conn->query($sql2);
while ($row = $result2->fetch_assoc()) {
$solde = $row['solde'];
}
if ($conn->query($sql) === TRUE) {
	
	if ($type == 0) {
		$retrait = $solde - $montant;
		$sql = "UPDATE comptebancaire set solde = $retrait WHERE idcb=$idc";
	}else{
		$depot = $solde + $montant;
		$sql = "UPDATE comptebancaire set solde = $depot WHERE idcb=$idc";
	}
	$result3 = $conn->query($sql);
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<br>
<a href="client.php"> retour</a><br>