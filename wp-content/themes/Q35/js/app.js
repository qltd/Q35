$(document).foundation();


timelineDone = false;
sectionsDone = false;
peopleDone = false;


$(function(){

    $(window).scroll(function() {

        // Fixed header
        var fromTop = $("body").scrollTop();
        $('.logo-header').toggleClass("scrolled", (fromTop > 666));


        /* Scroll backgrounds of years when in view */
        if (timelineDone != true){
            $('.timeline').each(function(i, li){
                var $li = $(li);
                var visible = $li.visible(true);
                if (visible){
                        $li.find('.year').each(function(ii, li2){
                            setTimeout(function(){
                                $(li2).addClass('animate');
                             }, ii*200);
                        });
                    if (i>=2) timelineDone = true;
                }
            });
        }


        /* Fade in sections as they scroll into view */
        if (sectionsDone != true){
            $('section').each( function(i){
                var visible = $(this).visible(true);
                if (visible) {
                    $(this).addClass('animate');
                    if (i>=($('section').length)-1) sectionsDone = true;
                }
            });
        }


        if (peopleDone != true){
            $('.people').each(function(i, li){
                var $li = $(li);
                var visible = $li.visible(true);
                if (visible){
                        $li.find('.row').each(function(ii, li2){
                            setTimeout(function(){
                                $(li2).addClass('animate');
                             }, ii*200);
                        });
                    if (i>=2) peopleDone = true;
                }
            });
        }

    });

});


