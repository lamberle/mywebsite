var x = 4;

function display_image(im, rm="none") {
	if(im.length > 0) {
		console.log(im);
	  	im.addClass("img-view");
	  	im.attr("src", im.attr("alt"));
	  	console.log(im);
	  	if(rm == "last") {
	  		$(".img-view").last().removeClass("img-view");
	  	}
	  	if(rm == "first") {
	  		$(".img-view").first().removeClass("img-view");
	  	}
  	}
}
function exit_display() {
	  	$(".img-view").removeClass("img-view");
	  	$('#previous').remove();
	  	$('#next').remove();
		$('.black-bg').remove();
}

$(document).ready(function(){
	$(".img-mini").mouseenter(function() {
		var w = $(this).width();
		var h = $(this).height();
		$(this).width(w+x*2);
		$(this).height($(this).width()*h/w);
		$(this).css( { "margin-left" : "-" + x + "px", "margin-top" : "-" + x + "px" } );
	});
	$(".img-mini").mouseleave(function() {		
		var w = $(this).width();
		var h = $(this).height();
		$(this).width(w-x*2);
		$(this).height($(this).width()*h/w);
		$(this).css( { "margin-left" : "0px", "margin-top" : "0px" } );
	});
  	$("body").on('click','#previous',function() {
  		var id = $(".img-view").attr("id").substring(5);
  		var prev_id = $("div.pictures > .tjGalleryItem > #preview_" + id).parent().prev().children().attr("id").substring(8);
	  	display_image($("#full_" + prev_id), "last");
  	});
	$("body").on('click','#next',function() {
  		var id = $(".img-view").attr("id").substring(5);
  		var next_id = $("div.pictures > .tjGalleryItem > #preview_" + id).parent().next().children().attr("id").substring(8);
	  	display_image($("#full_" + next_id), "first");
	});
	$(".img-mini" ).click(function() {
	  var id = $(this).attr('id').split("_")[1];
	  display_image($('#full_' + id))
	  var div = document.createElement("div");
	  div.className='black-bg';
	  $("body").append(div).on('click','.black-bg',exit_display);

	  $('body').append("<img id='previous' src='ressources/previous.png' class='arrow arrow-left'>");

  	  $('body').append("<img id='next' src='ressources/next.png' class='arrow arrow-right'>");

	});

	$(document).on('keypress',function(e) {
		console.log(e.key);
	    if(e.key === "Escape") {
	        exit_display();
	    }
	});
});