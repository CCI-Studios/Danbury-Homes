(function($){
    
    $(function(){
        init();
    });
    
    function init() {
        $(".view-feature-images.thumb img").each(function(i, img) {
            $(img).attr("tabindex", 0).click(thumbClick);
        });
        $(".view-feature-images.full .views-row-first").addClass("shown");
    }
    
    function thumbClick(e) {
        var i = $(e.target).closest(".views-row").index();
        show(i);
    }
    
    function show(i) {
        console.log("showing "+i)
        var $row = $(".view-feature-images.full .views-row-"+(i+1));
        console.log($row);
        if ($row.hasClass("shown")) return;
        
        var $oldRow = $(".view-feature-images.full .views-row.shown");
        $oldRow.removeClass("shown").addClass("hiding").animate({
            opacity: 0
        }, function() {
            $(this).css("opacity",1).removeClass("hiding");
        });
        
        $row.addClass("shown");
    }
    
})(jQuery);
