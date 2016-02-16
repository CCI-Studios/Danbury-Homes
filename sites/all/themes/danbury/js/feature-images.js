(function($){
    
    $(function(){
        init();
    });
    
    function init() {
        $(".view-feature-images.thumb img").each(function(i, img) {
            $(img).attr("tabindex", 0).click(thumbClick);
        });
        $(".view-feature-images.full .views-row-first").addClass("shown");
        
        $(".view-feature-images.full").append("<a href='#' class='feature-image-button prev-button'>previous</a><a href='#' class='feature-image-button next-button'>next</a>");
        $(".view-feature-images.full .prev-button").click(previous);
        $(".view-feature-images.full .next-button").click(next);
    }
    
    function thumbClick(e) {
        var i = $(e.target).closest(".views-row").index();
        show(i);
    }
    
    function show(i) {
        var $row = $(".view-feature-images.full .views-row-"+(i+1));
        if ($row.hasClass("shown")) return;
        
        var $oldRow = $(".view-feature-images.full .views-row.shown");
        $oldRow.removeClass("shown").addClass("hiding").animate({
            opacity: 0
        }, function() {
            $(this).css("opacity",1).removeClass("hiding");
        });
        
        $row.addClass("shown");
    }
    
    function next() {
        var i = $(".view-feature-images .shown").index();
        var next = i + 1;
        if (next >= $(".view-feature-images.full .views-row").length) {
            next = 0;
        }
        show(next);
        return false;
    }
    function previous() {
        var i = $(".view-feature-images .shown").index();
        var next = i - 1;
        if (next < 0) {
            next = $(".view-feature-images.full .views-row").length-1;
        }
        show(next);
        return false;
    }
    
})(jQuery);
