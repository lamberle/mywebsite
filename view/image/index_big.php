<?php
	foreach($data as $image) {
		echo '
		<center>
		<div id="img_'.$image->image_id.'">
			<h2>'.$image->image_title.'</h2>
			<img class="img-display" src="'.$image->image_url.'" alt="'.$image->image_title.'">
			<p>'.$image->image_description.'</p>
		</div>
		</center>
		';
	}
?>