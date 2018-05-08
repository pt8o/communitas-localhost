/*
    Custom behaviours specific to the Communitas website.
*/

( function( $ ) {
    console.log('communitas script');

    // FRONT PAGE
    // Slideshow
    var slides = [];
    var current = 0;
    $('#slideshow .entry').each(function(i) {
        if (i == 0) { $(this).addClass('active'); }
        if (i > 0) { $(this).addClass('right'); }
        slides.push($(this));
    });
    var max = slides.length - 1;

    var runSlideshow = function() {
        $('#slideshow .active').removeClass('active');
        slides[current].addClass('active');
        for (var i = 0; i < slides.length - 1; i++) {
            if (i < current) {
                slides[i].removeClass('right').addClass('left');
            }
            if (i > current) {
                slides[i].removeClass('left').addClass('right');
            }
        }
    };

    $('.slideshow-control').on('click tap', function() {
        var temp = current;

        if ($(this).is('#slide-left') && current > 0) {
            current -= 1;
        }
        if ($(this).is('#slide-right') && current < slides.length - 1) {
            current += 1;
        }

        if (current != temp) {
            runSlideshow();
        }
    });

    $('.slideshow-index').on('click tap', function() {
        var temp = current;
        current = parseInt(
            $(this).attr('id').replace('slideshow-index-', '')
        ) - 1;

        console.log(temp);
        console.log(current);

        if (current != temp) {
            runSlideshow();
        }
    });
} )( jQuery );
