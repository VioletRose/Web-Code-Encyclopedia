$(document).ready(function(){
	$('.scriptedMenu').on('click', function(selfOnly){
		selfOnly.stopPropagation();
		var $self = $(this);
		$self.toggleClass('activeMenu');
		if ($self.hasClass('activeMenu')) {
			$self.children('.hidden').slideDown();
		}
		else $self.children('.hidden').slideUp();
	});
});