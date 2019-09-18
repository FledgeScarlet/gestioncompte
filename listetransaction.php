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
$idc = $_GET["idcb"] ;
$sql = "SELECT idt, date, montant, type, idc FROM transaction WHERE idc=$idc";
$result = $conn->query($sql);


    while($row = $result->fetch_assoc()) {
		$type = $row['type'];
		if ($type == 0){
			echo "idt: " . $row["idt"]. " - Montant: " . $row["montant"]. " - Type: " . $row["type"]. " - Operation effectuee le: " . $row["date"]."<br>";
		}else{
			echo "<b>idt: " . $row["idt"]. " - Montant: " . $row["montant"]. " - Type: " . $row["type"]. " - Operation effectuee le: " . $row["date"]."<br><b>";
		}
	}
$conn->close();
?>
<br>
<a href="client.php"> retour</a><br>