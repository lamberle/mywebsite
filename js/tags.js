var selected_tag = "selected-tag"

function update() {
	$(".img-mini").each(function() {
		$("#filtered-pictures").append($(this));
	});
	$(".selected-tag").each(function() {
		var tag_id = $(this).attr("id");
		$(".pictures").append($('.' + tag_id));

	});
	$(".tjGalleryItem").remove()
	$('.pictures').tjGallery({selector:"img",row_min_height:220,margin:15});
}

$(document).ready(function(){
  	$("body").on('click','.tag',function() {
  		if ($(this).hasClass(selected_tag)) {
  			$(this).removeClass(selected_tag);
  			$("#tag_all").addClass(selected_tag);
  		} else {
  			$(".tag").removeClass(selected_tag);
  			$(this).addClass(selected_tag);
  		}
  		update();
  	});
});



// function update() {
// 	$(".img-mini").each(function() {
// 		$(this).css({"display": "none"});
// 	});
// 	$(".selected-tag").each(function() {
// 		var tag_id = $(this).attr("id");
// 		$('.' + tag_id).css({"display": "inline-block"});
// 	});
// 	// $('.pictures').tjGallery();
// }

// $(document).ready(function(){
//   	$("body").on('click','.tag',function() {
//   		$(this).toggleClass("selected-tag");
//   		update();
//   	});
// });