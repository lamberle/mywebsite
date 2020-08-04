
<center>
	<a href='?r=site'>Accueil</a>
	<h1>Clients</h1>
	<p>Client sur un client pour accéder à la liste de ses équipements et pour en ajouter de nouveaux</p>
	<form method='POST' action='?r=client'>
		<label for='client_nom'>Nom du client</label>
		<input type='text' name='client_nom' id='client_nom' placeholder='ajouter client'/>
		<input type='submit' name='add_client' value='Ajouter'/>
	</form>
	<?php
		echo "<table>";
			echo "<tr><th>Nom</th></tr>";
			foreach($data as $client) {
				echo "<tr>";
					echo "<td><a href='?r=client/view&idclient=".$client->client_id."'>".$client->client_nom."</a></td>";
				echo "</tr>";
			}
		echo "</table>";
	?>
</center> 