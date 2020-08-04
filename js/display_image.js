var x = 4;

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

	$(".img-mini" ).click(function() {
	  var id = $(this).attr('id').split("_")[1];
	  $('#full_' + id).addClass("img-view");
	  var div = document.createElement("div");
	  div.className='black-bg';
	  $("body").append(div).on('click','.black-bg',function() {
	  	$(".img-view").removeClass("img-view");
	  	$('#previous').remove();
	  	$('#next').remove();
		$(this).remove();
	  });

	  $('body').append("<img id='previous' src='ressources/previous.png' class='arrow arrow-left'>");
	  $("body").on('click','#previous',function() {
	  	var prev = $(".img-view").prev(".img-hidden");
	  	if(prev.length > 0) {
		  	prev.addClass("img-view");
		  	$(".img-view").last().removeClass("img-view");
		  }
	  });

  	  $('body').append("<img id='next' src='ressources/next.png' class='arrow arrow-right'>");
	  $("body").on('click','#next',function() {
	  	var next = $(".img-view").next(".img-hidden");
	  	if(next.length > 0) {
		  	next.addClass("img-view");
		  	$(".img-view").first().removeClass("img-view");
		  }
	  });
	});
});