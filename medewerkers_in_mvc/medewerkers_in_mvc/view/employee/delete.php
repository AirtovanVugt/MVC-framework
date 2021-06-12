<h1>Weet je zeker dat je deze Employee wilt verwijderen</h1><br>
<p>Je staat nu op het punt <?php echo $employee["name"]; ?> die <?php echo $employee["age"]; ?> jaar is te verwijderen</p><br>
<form method="post" action="<?php echo URL ?>employee/destroy/<?php echo $employee["id"]; ?>">
<input type="submit" value="Ja"> <button><a href="<?=URL?>employee/index">Nee</a></button><br>
</form>
<?php
// maak een bevestig pagina voor het verwijderen van een mededwerker
?>

