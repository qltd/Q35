$(document).foundation();


timelineDone = false;
sectionsDone = false;
peopleDone = false;

function resizeGallery(){
    $('.img-row').each(function(){
        var height = $(this).width() / 3; // make the height equal to 1 of the columns widths
        $(this).css({'height':height+'px'});
    })
}

$(function(){

    resizeGallery();
    $(window).resize(function(){
        resizeGallery();
    });


    $(".slide div").on('click', function() {
        if ($(this).hasClass('grow')){
            $(".slide div").removeCldivss("grow");
        } else {
            $(".slide div").removeClass("grow");
            $(this).addClass("grow");
        }
        return false;
    });


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
                        $li.each(function(ii, li2){
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
                }
            });
        }


        // if (peopleDone != true){
        //     $('.people').each(function(i, li){
        //         var $li = $(li);
        //         var visible = $li.visible(true);
        //         if (visible){
        //                 $li.find('.row').each(function(ii, li2){
        //                     setTimeout(function(){
        //                         $(li2).addClass('animate');
        //                      }, ii*200);
        //                 });
        //             if (i>=2) peopleDone = true;
        //         }
        //     });
        // }

    });

    $('.slider').slick()

});


