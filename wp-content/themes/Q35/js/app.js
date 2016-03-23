$(document).foundation();


$(window).scroll(function() {
    var fromTop = $("body").scrollTop();
    $('.logo-header').toggleClass("scrolled", (fromTop > 200));
});
