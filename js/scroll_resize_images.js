function offsetBottom(el, i) { i = i || 0; return $(el)[i].getBoundingClientRect().bottom }
function offsetTop(el, i) { i = i || 0; return $(el)[i].getBoundingClientRect().top }

$(document).ready(function(){
	$(".img-display").each(function() {
		var w = $(this).prop("naturalWidth");
		var h = $(this).prop("naturalHeight");
		var div = $(this).parents(".img-album");
		if(w > h) {
			div.width("90%");
			$(this).width(div.width());
			div.height(div.width()*h/w);
		} else {
			div.height("85vh");
			$(this).height(div.height());
			div.width(div.height()*w/h);
		}
	});
	$(window).scroll(function() {
		$(".img-display").each(function() {
			console.log()
			var eTop = $(this).offset().top;
			var ePos = eTop - $(window).scrollTop();
			var h = $(window).height();
			var hi = $(this).height();
			var wi = $(this).width();
			// console.log(ePos);
			// console.log(ePos);
			var scale = 1.3-0.3*(ePos+hi)/(h+hi);
			console.log(scale)
			$(this).animate({'zoom': scale }, 20);
			// if(wi > hi) {
			// 	$(this).width($(this).parents(".img-album").width() * scale)
			// 	// $(this).parents(".img-album").width("90%")
			// } else {
			// 	$(this).height($(this).parents(".img-album").height() * scale)

			// 	// $(this).parents(".img-album").height("90%")
			// }
			
			// console.log((ePos-hi)*(h+hi)/100);
			// console.log($(this).parents(".image")[0])
		});
	});
});