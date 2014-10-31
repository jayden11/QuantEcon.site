$(function(){

	if ($('.tab-panel').length > 0) {
		toggles = $('li','.tab-nav');
		tabs = $('.tab', '.tab-panel');
		//tabs.hide();
		$('li','.tab-nav').click(function(){
			index = $(this).index();
			toggles.removeClass('active');
			$(this).addClass('active');
			//tabs.find(':visible').fadeOut(function(){			});
			tabs.hide().eq(index).fadeIn();
			return false;
		});
	}
	
});