$(function(){

	if ($('.tab-panel').length > 0) {
		toggles = $('li','.tab-nav');
		tabs = $('.tab', '.tab-panel');
		$('li','.tab-nav').click(function(){
			index = $(this).index();
			toggles.removeClass('active');
			$(this).addClass('active');
			tabs.hide().eq(index).fadeIn();
			return false;
		});
	}


	$('#top-nav .sub').click(function(event){
		event.preventDefault();
		event.stopPropagation();
		$(this).toggleClass('sub-open');
		$('#top-nav .sub').not($(this)).removeClass('sub-open');
		$(document).on('click', function () {
			$('#top-nav .sub-open').removeClass('sub-open');
			$(this).off();
		});
	});



});


