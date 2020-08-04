<?php
	if(is_admin()) {
		echo '
		<script src="js/select_thumbnails.js"></script>
		<div class="action">
			<form method="POST" action="?r=image/add" enctype="multipart/form-data" class="form-horizontal">
				<div class="form-group">
					<input type="file" name="image_url[]" multiple>
					<input type="submit" class="btn btn-primary" name="add_image" value="Import"/>
				</div>
			</form>
		</div>
		<div class="action">
			<form method="POST" action="?r=image" enctype="multipart/form-data" class="form-horizontal">
				<select id="images_selector" name="images_selector[]" multiple style="display:none">';
					foreach($data as $image) {
						echo '<option value="'.$image->image_id.'">'.$image->image_title.'</option>';
					}
		echo '
				</select>
				<select class="select" id="album_selector" name="album_selector">';
					foreach(Album::findAll() as $album) {
						echo '<option value="'.$album->album_id.'">'.$album->album_title.'</option>';
					}
		echo '
				</select>
				<input type="submit" class="btn btn-primary" name="add_to_album" value="Add to Album"/>
				<input type="submit" class="btn btn-primary" name="delete_images" value="Delete"/>
			</form>
		</div>';
	} else {
		echo '<script src="js/display_image.js"></script>';
	}
	foreach($data as $image) {
		echo '<div class="thumbnail" id="img_'.$image->image_id.'">';
		echo '<img class="img-mini-square" src="'.$image->image_preview_url.'" alt="'.$image->image_title.'">';
		echo '<img class="img-hidden" id="'.$image->image_id.'" src="'.$image->image_url.'" alt="'.$image->image_title.'">';
		echo '</div>';
	}
	?>
