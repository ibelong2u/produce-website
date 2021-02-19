
function css(selector, property, value) 
{
	jQuery(selector).css(property,value);
}

$(function(){
	$('#slides').slides({
		preload: true,
		preloadImage: 'img/slideshow/loading.gif',
		play: 5000,
		pause: 2500,
		hoverPause: false
	});
});	


$(document).ready(function() {
	  $('#myModal').reveal();
});


$('#nav > a[href="aroniaberry.html"]').mouseover(function() { $('#aroniaberry_menu').show(); });

$('.dropdown').mouseleave(function() { $(this).hide(); });



/*	



		  
$(document).ready(function(){ 

	onclick="jQuery('html').css('background-image','url(\'http://i.imgur.com/Wbiyx.jpg\')')"

});
		  
	
*/