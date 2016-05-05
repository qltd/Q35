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


function Confetti() {
  //canvas init
  var canvas = document.getElementById("confetti");
  var ctx = canvas.getContext("2d");

  //canvas dimensions
  var W = window.innerWidth;
  var H = window.innerHeight;
  canvas.width = W;
  canvas.height = H;

  //particles
  var mp = 150; //max particles
  var types = ['circle', 'circle', 'triangle', 'triangle', 'line'];
  var colors = [
    [238, 96, 169],
    [68, 213, 217],
    [245, 187, 152],
    [144, 148, 188],
    [235, 234, 77]
  ];
  var angles = [
    [4,0,4,4],
    [2,2,0,4],
    [0,4,2,2],
    [0,4,4,4]
  ]
  var particles = [];
  for (var i = 0; i < mp; i++) {
    particles.push({
      x: Math.random() * W, //x-coordinate
      y: Math.random() * H, //y-coordinate
      r: Math.random() * 4 + 1, //radius
      d: Math.random() * mp, //density
      l: Math.floor(Math.random()*65+-30), // line angle
      a: angles[Math.floor(Math.random()*angles.length)], // triangle rotation
      c: colors[Math.floor(Math.random()*colors.length)], // color
      t: types[Math.floor(Math.random()*types.length)] //shape
    })
  }

  function draw(){
    ctx.clearRect(0, 0, W, H);


    for (var i = 0; i < mp; i++) {
      var p = particles[i];
      var op = (p.r <= 3) ? 0.4 : 0.8;

      if (p.t == 'circle'){
        ctx.fillStyle = "rgba(" + p.c + ", "+ op +")";
        ctx.beginPath();
        ctx.moveTo(p.x, p.y);
        ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2, true);
        ctx.fill();
      } else if (p.t == 'triangle'){
        ctx.fillStyle = "rgba(" + p.c + ", "+ op +")";
        ctx.beginPath();
        ctx.moveTo(p.x, p.y);
        ctx.lineTo(p.x + (p.r*p.a[0]), p.y + (p.r*p.a[1]));
        ctx.lineTo(p.x + (p.r*p.a[2]), p.y + (p.r*p.a[3]));
        ctx.closePath();
        ctx.fill();
      } else if (p.t == 'line') {
        ctx.strokeStyle = "rgba(" + p.c + "," + op +")";
        ctx.beginPath();
        ctx.moveTo(p.x, p.y);
        ctx.lineTo(p.x + p.l, p.y + (p.r * 5));
        ctx.lineWidth = 2;
        ctx.stroke();
      }

    }
    update();
  }



  function update() {

    for (var i = 0; i < mp; i++) {
      var p = particles[i];
      p.y += Math.cos(p.d) + 1 + p.r / 2;
      p.x += Math.sin(0) * 2;

      if (p.x > W + 5 || p.x < -5 || p.y > H) {
        particles[i] = {
          x: Math.random() * W,
          y: -10,
          r: p.r,
          d: p.d,
          l: p.l,
          a: p.a,
          c: p.c,
          t: p.t
        };
      }
    }
  }

  //animation loop
  setInterval(draw, 23);

}

window.onload = function(){
  Confetti();
}