(function($){

	$(function(){

		$('.mobile-menu .block-content a').click(function(e){

			e.preventDefault();
			console.log('click');
			$('.block-system-main-menu').slideToggle();

		});
       
    });

})(jQuery);