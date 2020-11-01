<?php
if(is_admin()) {
	echo '
	<form method="POST" action="?r=album" class="form-horizontal">
		<div class="form-group">
			<label class="control-label col-sm-2" for="album_title">Titre</label>
			<input type="text" class="form-control" name="album_title" id="album_title" placeholder="titre de l\'album"/>
			<label class="control-label col-sm-2" for="album_description">Description</label>
			<input type="text" class="form-control" name="album_description" id="album_description" placeholder="description de l\'album"/>
			<input type="submit" class="btn btn-primary" name="add_album" value="Créer"/>
		</div>
	</form>
	<div>';
}
	echo "<center>";
			foreach($data as $album) {
				$imgs = $album->getImages();
				
					
					echo "<a class='album-thumbnail' href='?r=album/view&idalbum=".$album->album_id."'>";
					echo '<div class="album-thumbnail">';
					if(count($imgs) > 0) {
						$image = $imgs[0];
						echo '<img src="'.$image->image_preview_url.'" alt="'.$image->image_title.'">';
					} else {
						echo '<img " src="ressources/dummy.png" alt="aucune image">';
					}
					echo '<center><p>'.$album->album_title."</p></center>";
					echo'</div>';
					echo "</a>";
				

			}
		echo "</center>";
	?>
	</div>