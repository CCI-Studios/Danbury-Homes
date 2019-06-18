(function($){

	$(function(){

        if (document.location.href.indexOf('submitted') > -1  )
		{
			$('.popup').fadeIn();
			$('.popup').addClass('overlay');	
		}

		$(document).mouseup(function (e)
		{	
			var container =$('.popup');
			if (!container.is(e.target)
		        && container.has(e.target).length === 0) 
		    {
		        container.fadeOut();
		    }
		});

		if(window.location.href.indexOf('home-plans') > 0)
		{
			$('.ac-newsletter-sign-up-form #sign-up-messages').insertBefore('.white-logo');
		}

		$('<div id="danbury"></div>').insertBefore('#inbx');
		
    });

})(jQuery);