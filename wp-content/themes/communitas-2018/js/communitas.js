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


    $('.slideshow-control').on('click tap', function() {
        var max = slides.length - 1;
        var temp = current;

        if ($(this).is('#slide-left') && current > 0) {
            current -= 1;
        }
        if ($(this).is('#slide-right') && current < slides.length - 1) {
            current += 1;
        }

        if (current != temp) {
            console.log(current);
        }
    });
} )( jQuery );
