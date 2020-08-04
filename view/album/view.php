<!-- <script src="js/scroll_resize_images.js"></script> -->
<script src="js/jquery-tjgallery.min.js"></script>
<script>
		$(window).on('load', function(){
			var h = $(window).height();
			$('.pictures').tjGallery({row_min_height:0.8*h,margin:15});
		});
		// $(document).ready(function(){
		// $(".img-album").mouseenter(function() {
		// 	$(this).animate({zoom:1.03}, 200);
		// });
		// $(".img-album").mouseleave(function() {
		// 	$(this).animate({zoom:1}, 200);
		// });
	// });
</script>
<center><h1><?php echo $data->album_title; ?></h1>
<p><?php echo $data->album_description; ?></p></center>
<?php
	if(is_admin()){
		echo '<a class="btn btn-primary" href="?r=image">Add images</a>';
	}
	$images = $data->getImages();
	echo "<div id='album' class='pictures'>";
	foreach($images as $image) {
		echo '<img class="img-album" src="'.$image->image_url.'" alt="'.$image->image_title.'">';
	}
	echo "</div>"
?>