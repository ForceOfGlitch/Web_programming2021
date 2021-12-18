$(document).ready(function(){
	$('.gallery').slick({
		variableWidth:true
	});

});

$(function () {
	$('.menu_open').click(function () {
		$('.menu').toggleClass('show_menu')
	})
});

