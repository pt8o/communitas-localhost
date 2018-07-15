/*
    Custom behaviours specific to the Communitas website.
*/

( function( $ ) {
    // TOP MENU
    // Add class after scrolled down.
    var scrolledFromTop = $(window).scrollTop();
    var scrolledDown = scrolledFromTop > 0; 

    $(window).scroll(function(ev) {
        scrolledFromTop = $(window).scrollTop();

        if (scrolledDown && scrolledFromTop === 0) {
            $('#masthead').removeClass('scrolled');
            scrolledDown = false;
        }

        if (!scrolledDown && scrolledFromTop > 0) {
            $('#masthead').addClass('scrolled');
            scrolledDown = true;
        }
    });

    // FRONT PAGE
    // Slideshow
    var slides = [];
    var current = 0;
    $('.slideshow .entry').each(function(i) {
        if (i == 0) { $(this).addClass('active'); }
        if (i > 0) { $(this).addClass('right'); }
        slides.push($(this));
    });
    var max = slides.length - 1;

    const runSlideshow = function() {
        $('.slideshow .active').removeClass('active');
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

        if (current === 0) {
            $('#slide-left').addClass('hidden');
        } else if (current === max) {
            $('#slide-right').addClass('hidden');
        } else {
            $('.slideshow-control.hidden').removeClass('hidden');
        }
    });

    $('.slideshow-index').on('click tap', function() {
        var temp = current;
        current = parseInt(
            $(this).attr('id').replace('slideshow-index-', '')
        ) - 1;

        if (current != temp) {
            runSlideshow();
        }
    });

    // Video controls
    $('.video-thumbnail button').each(function() {
        $(this).on('click tap', function() {
            $(this).parent().next('.video-container').addClass('show');
        });
    });

    $('.video-overlay, .video-overlay .close').each(function() {
        $(this).on('click tap', function() {
            $('.video-container').removeClass('show');
        });
    });
} )( jQuery );
