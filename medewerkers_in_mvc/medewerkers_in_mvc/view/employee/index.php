
	<h1>Overzicht van personen</h1>
	<?php
		foreach($employees as $key){
	?>
	<ul>
		<li>
			<span><?php echo $key["name"]; ?> is <?php echo $key["age"]; ?> jaar</span>
			<?php
			// de opbouw van de link bepaald welke method in welke controller aangeroepen wordt.
			// het woordje "employee" in de url betekent dat het framework moet zoeken naar een controller genaamd "EmployeeController".
			// Hij maakt van de eerste letter een hoofdletter en plakt er zelf "Controller" achter.
			// Het woordje "update" of "delete" betekent dat hij in deze controller moet zoeken naar een method met deze naam.
			?>
			<a href="<?=URL?>/employee/edit/<?php echo $key["id"]; ?>">Wijzigen</a> <a href="<?=URL?>/employee/delete/<?php echo $key["id"]; ?>">Verwijderen</a>
		</li>
	</ul>
	<?php
}
?>