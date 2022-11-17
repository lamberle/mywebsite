<!-- <script src="js/jquery-tjgallery.min.js"></script> -->
<script src="js/display_image.js"></script>
<script src="js/jquery-tjgallery.min.js"></script>

<script>
	// waiting for loading page
	$(window).on('load', function(){
		$('.pictures').tjGallery({selector:"img",row_min_height:220,margin:15});
	});

</script>

<script src="js/tags.js"></script>

<div class="tags">
	<p class="tag selected-tag" id="tag_all">All</p>
<?php
	foreach(Tag::findAll() as $tag) {
		echo '<p class="tag" id="tag_'.$tag->tag_id.'">'.$tag->tag_name.'</p>';
	}
?>
</div>
<div class="pictures">
<?php
	foreach($data as $image) {
		$tags = " tag_all";
		foreach($image->getTags() as $tag) {
			$tags = $tags.' tag_'.$tag->tag_id;
		}
		echo '<img class="img-mini '.$tags.'" id="preview_'.$image->image_id.'" src="'.$image->image_preview_url.'" alt="'.$image->image_title.'">';
 }?>
 </div>	
<div id="filtered-pictures"></div>
 <?php
	foreach($data as $image) {
		echo '<img class="img-hidden" id="full_'.$image->image_id.'" src="ressources/dummy.png" alt="'.$image->image_url.'" alt="'.$image->image_title.'">';
	}
