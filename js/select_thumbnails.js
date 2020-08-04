$(document).ready(function(){
	$(".thumbnail" ).click(function() {
	  $( this ).toggleClass("selected");
	  var id = $(this).attr('id').split("_")[1];
	  opt = $('#images_selector option[value=' + id + ']');
	  if (opt.prop("selected")) {
	  	opt.prop("selected", false);
	  } else {
	  	opt.prop("selected", true);
	  }
	});
});