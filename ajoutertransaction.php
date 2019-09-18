<form method="POST" action="addtransaction.php">

date de la transaction: <input name= "date" type="date" /> <br>
montant: <input name= "montant" type="number" /> <br>
type d'operation : <select name="type">
  <option value="0">Retrait</option> 
  <option value="1" selected>Depot</option>
</select> <br>
ID Compte : <input name="idc" type="number" value="<?php echo $_GET['idcb'] ?>" readonly /> <br>
<input type="Submit" value="envoyer" />

</form>