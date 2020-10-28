var x = 4;

function display_image(im, rm="none") {
	if(im.length > 0) {	
	  	im.addClass("img-view");
	  	im.attr("src", im.attr("alt"));
	  	if(rm == "last") {
	  		$(".img-view").last().removeClass("img-view");
	  	}
	  	if(rm == "first") {
	  		$(".img-view").first().removeClass("img-view");
	  	}
  	}
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
	  	var prev = $(".img-view").prev(".img-hidden");
	  	console.log(prev)
	  	display_image(prev, "last")
  	});
	$("body").on('click','#next',function() {
		var next = $(".img-view").next(".img-hidden");
	  	display_image(next, "first")
	});
	$(".img-mini" ).click(function() {
	  var id = $(this).attr('id').split("_")[1];
	  display_image($('#full_' + id))
	  var div = document.createElement("div");
	  div.className='black-bg';
	  $("body").append(div).on('click','.black-bg',function() {
	  	$(".img-view").removeClass("img-view");
	  	$('#previous').remove();
	  	$('#next').remove();
		$(this).remove();
	  });

	  $('body').append("<img id='previous' src='ressources/previous.png' class='arrow arrow-left'>");

  	  $('body').append("<img id='next' src='ressources/next.png' class='arrow arrow-right'>");

	});
});