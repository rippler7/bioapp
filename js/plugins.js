(function($){
    $.fn.ajaxify = function(options){
        var settings = $.extend({
            'thLink':'',
            'idli':'',
            'thTitle':'',
            'thPlace':''
        }, options);
        $.ajax({
            data:{nav:'nav',theLink:settings.thLink,idli:settings.idli,liTitle:settings.thTitle},
            dataType:'json',
            type:'POST',
            url:'api/response.php',
            success:function(data){
                $(settings.thPlace).load(settings.thLink).hide().fadeIn('slow');
                $('title').text("Bio 103N: "+settings.thTitle);
            }
        });
    }
})(jQuery);
(function($){
    $.fn.rPlaceSlide = function(options){
        var settings = $.extend({
            'theMenu':'',
            'theImages':'',
            'divVwr':'',
            'chRcvr':''
        },options);
        $(this).on('click', function(e){
            e.preventDefault();
            var theClass = $(this).attr('class');
            var theTitle = $(this).text();
            var theID = $(this).attr('id');
            //var elementID = $(this).attr('id');
            //console.log(settings.theMenu);
            if(('.'+theClass) == (settings.theMenu)){
            replaceItems();
            makeCurr();
            }   
            function replaceItems(){
                //console.log(settings.theImages[theTitle]);
               $(settings.chRcvr).reel({
                   // indicator:   5, // For no indicator just remove this line
                    images:      settings.theImages[theID]
                  });
            }
            function makeCurr(){
                //console.log($('.'+theClass).parent().attr('class'));
                $('.'+theClass).parent().removeAttr('class','current');
                $('#'+theID).parent().attr('class','current');
            }
        })
    }
})(jQuery);