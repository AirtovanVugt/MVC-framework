	
	<h1>Persoon wijzigen</h1><br>
	<p>Je staat nu op het punt <?php echo $employee["name"]; ?> die <?php echo $employee["age"]; ?> jaar is te wijzigen</p><br>
	<form name="update" method="post" action="<?php echo URL ?>employee/update">
	    <input type="hidden" name="id" value="<?php echo $employee["id"]; ?>"/>
	    <label>Naam: </label><input type="text" name="Naam"><br>
	    <label>Jaar: </label> <input type="text" name="Jaar"><br>
	    <input type="submit">
	    <!--  Bouw hier de rest van je formulier   -->
	</form><br>