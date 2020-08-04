<center>
	<div id='edit_images'>
		<form method='POST' action='?r=image/edit' enctype="multipart/form-data" class="form-horizontal">
			<div class="form" style="width:500px">

<?php
	foreach($data as $image) {
		echo '<label class="control-label col-sm-2" for="image_title">Titre</label>';
		echo '<input type="text" class="form-control" name="image_title[]" id="image_title" placeholder="titre de l\'image" value='.$image->image_title.' maxlength="50"/>';
		echo '<label class="control-label col-sm-2" for="image_description">Description</label>';
		echo '<input type="text" class="form-control" name="image_description[]" id="image_description" placeholder="description de l\'image" value="'.$image->image_description.'"/>';
		echo '<input type="hidden" name="image_id[]" id="image_id" value="'.$image->image_id.'"/>';
		echo '<div class="thumbnail"><img  class="img-mini" src="'.$image->image_preview_url.'" alt="'.$image->image_title.'"></div>';
	}

?>
				<input type='submit' class="btn btn-primary" name='edit_images' value='Save Changes'/>
			</div>
		</form>
	</div>
</center> 