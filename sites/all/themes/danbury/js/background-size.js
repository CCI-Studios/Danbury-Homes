(function($){    
    $(function(){
    
        var max= $('.view-feature-images.full .views-row').length;
      
        for(var i=1; i<=max; i++)
        {	     
	       $('.view-feature-images.full .views-row-'+i+' .views-field-field-feature-image').replaceImgtag();		
        }
    });

    $.fn.replaceImgtag = function( action ) {
        
        var img = $(this).find('img');
        var imgSrc = img.attr('src');
        var div = $(this).find('div');
        img.remove();
        div.html('<div class="backbg"></div>');
        $(this).find('.backbg').css('background-image', 'url(' + imgSrc + ')');
    };

    if($('body.page-node-1').length > 0)
    {
        $('body').addClass('home-plans');
    }


})(jQuery);
