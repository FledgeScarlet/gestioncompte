<html>
<head>
    <style>
        table {
            border: medium solid #6495ed;
            border-collapse: collapse;
            width: 50%;
        }
        th {
            font-family: monospace;
            border: thin solid #6495ed;
            width: 30%;
            padding: 5px;
            background-color: #D0E3FA;
            background-image: url(sky.jpg);
        }
        td {
            font-family: sans-serif;
            border: thin solid #6495ed;
            width: 30%;
            padding: 5px;
            text-align: center;
            background-color: #fd6c9e;
        }
        caption {
            font-family: sans-serif;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>id</th>
        <th>Solde</th>
        <th>n°compte</th>
        <th>id du client</th>
    </tr>

<?php
$servername = "localhost";
$username = "root";
$password = "Azerty01";
$dbname = "gestioncompte";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user=$_GET['user'];
$sql = "SELECT idcb, solde, ncompte, idclient FROM comptebancaire WHERE idclient=$user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo "<td>" . $row["idcb"]. "</td><td>" . $row["solde"]. " €" . " </td><td>" . $row["ncompte"]. " </td><td> " . $row["idclient"]."</td>";
        echo '</tr>';
    }
} else {
    echo "Wesh t'a pas de compte abonne toi";
}
$conn->close();
?>
</table>
</body>
</html>