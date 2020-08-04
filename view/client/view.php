
<center>
<a href='?r=client'>Retour</a>
<?php
	echo "<h1>".$data->client_nom."</h1>";
	echo "<form method='POST' action='?r=client/view&idclient=".$data->client_id."'>";
		echo "<label for='equipement_nom'>Nom de l'équipement</label>";
		echo "<input type='text' name='equipement_nom' id='equipement_nom' placeholder='ajouter un équipement'/>";
		echo "<input type='submit' name='add_equipement' value='Ajouter'/>";
	echo "</form>";
	echo "<h2>Equipements :</h2>";
	echo "<table>";
	echo "<tr><th>Nom</th></tr>";
	foreach($data->getEquipements() as $equipement) {
		echo "<tr>";
			echo "<td>".$equipement->equipement_nom."</td>";
		echo "</tr>";
	}
	echo "</table>";
?>
</center>