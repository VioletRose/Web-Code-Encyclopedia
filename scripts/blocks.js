$(document).ready(function(){
	$('.block').on('click', function(){
		$(this).toggleClass('blueBlock').toggleClass('redBlock');
	});
	$('button').on('click', function(){
		$('.block').toggleClass('blueBlock').toggleClass('redBlock').html('&nbsp;').filter('.redBlock').html('R');
	});
});