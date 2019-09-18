<!--
<form method="POST" action="addcompte.php">

solde: <input name= "solde" type="number" /> <br>
numero compte: <input name= "ncompte" type="number" /> <br>
ID Client : <input name="idclient" type="number" /> <br>
<input type="Submit" value="envoyer" />

</form>
-->

<html>
<head>
<body>
<form method="POST" action="addcompte.php">

solde: <input name= "solde" type="number" /> <br>
numero compte: <input name= "ncompte" type="number" /> <br>
ID Client : <input name="idclient" type="number" value="<?php echo $_GET['idclient'] ?>" readonly /> <br>
<input type="Submit" value="envoyer" />

</form>
<br>
<a href="client.php"> retour</a><br>
</body>
</html>

