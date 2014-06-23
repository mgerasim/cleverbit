$(document).ready(function($) {
	/*
	$.fn.changeSize = function() {
		var h = $(window).height()-131;
		$(this).css("height", h);
	}
	
	$("#mission").changeSize();
	$("#whatwedo").changeSize();
	
	$(window).resize(function(){
		$("#mission").changeSize();
		$("#whatwedo").changeSize();
	});
	
	*/
	
	$(".bikebutton").mouseover(
		function() {
			var bub = "#"+$(this).attr("id")+"b";
			$(bub).show();
			$(bub).mouseleave(function(){
				$(this).hide();
			});
			
	});
	
	$(".bikebubble a").click(function(){
		var popup = $(this).attr("href");
		$(".bikebubble").hide();
		$(".bikebutton").hide();
		$(popup).show();
		$("img", popup).click(function(){
			$(popup).hide();
			$(".bikebutton").show();
		});
		return false;
	});
	
	$(".button").click(function(){
		var popup = $(this).attr("rel");
		$(popup).show();
		$("#whiteshadow").show();
		$("img", popup).click(function(){
			$(popup).hide();
			$("#whiteshadow").hide();
		});
		$("#whiteshadow").click(function(){
			$(popup).hide();
			$("#whiteshadow").hide();
		});
	});
	
	$("#tod2").click(function(){
		$.scrollTo("#whatwedo",800, {offset: -130});
	});
	
	$("#tod3").click(function(){
		$.scrollTo("#contacts",800, {offset: -130});
	});
	
	$("#tod0").click(function(){
		$.scrollTo(0,800, {offset: -130});
	});
	/*/*
	$("footer a").click(function(){
		$.scrollTo("#mission",800, {offset: -130});
		return false;
	});
	*/
	var deck = new $.scrolldeck({
		slides: '.oneblock',
		buttons: '#topmenu ul li a',
		easing: 'easeInOutExpo',
		offset: -130,
		duration: 1000
	});
	
	var scrollorama = $.scrollorama({ blocks:'.oneblock',enablePin: false, offset: -130});

	scrollorama
		.animate('#bike1 img',{ delay: 0, duration: 300, property:'top', start:-10, end:-350});
	scrollorama
		.animate('#bike2',{ delay: 200, duration: 250, property:'left', start:-1000, end:0})
		.animate('#bike2buttons',{ delay: 400, duration: 150, property:'opacity', start:0});
	scrollorama
		.animate('.position',{ delay: 300, duration: 200, property:'background-position-y', start:"375px", end:"40px" });
});