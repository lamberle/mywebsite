<!-- <script src="js/jquery-tjgallery.min.js"></script> -->
<script src="js/display_image.js"></script>
<script src="js/jquery-tjgallery.min.js"></script>
<div class="pictures">
<script>
	// waiting for loading page
	$(window).on('load', function(){
		$('.pictures').tjGallery({selector:"img",row_min_height:220,margin:15});
	});

</script>
<?php
	foreach($data as $image) {
		echo '<img class="img-mini" id="preview_'.$image->image_id.'" src="'.$image->image_preview_url.'" alt="'.$image->image_title.'">';
 }?>
 </div>	

 <?php
	foreach($data as $image) {
		echo '<img class="img-hidden" id="full_'.$image->image_id.'" src="'.$image->image_url.'" alt="'.$image->image_title.'">';
	}
