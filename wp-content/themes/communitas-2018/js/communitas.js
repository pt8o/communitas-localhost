/*
    Custom behaviours specific to the Communitas website.
*/

( function( $ ) {
    // TOP MENU
    // Add class after scrolled down.
    var scrolledFromTop = $(window).scrollTop();
    var scrolledDown = false; 

    if (scrolledFromTop > 0) {
        $('#masthead').addClass('scrolled');
        scrolledDown = true;
    }

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

        $('.slideshow-control.disabled').removeClass('disabled');
        if (current === 0) {
            $('#slide-left').addClass('disabled');
        } else if (current === max) {
            $('#slide-right').addClass('disabled');
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
            window.clearInterval(autoplay);
        }
    });

    // Slideshow index, doesn't exist rn
    // $('.slideshow-index').on('click tap', function() {
    //     var temp = current;
    //     current = parseInt(
    //         $(this).attr('id').replace('slideshow-index-', '')
    //     ) - 1;

    //     if (current != temp) {
    //         runSlideshow();
    //     }
    // });

    // Slideshow autoplay
    var autoplay = window.setInterval(function() {
        current += 1;
        if (current > max) { current = 0 };
        runSlideshow();
    }, 8000);

    // Video controls
    $('.video-thumbnail button').each(function() {
        $(this).on('click tap', function() {
            var videocontainer = $(this).parent().next('.video-container');
            var videocontent = videocontainer.find('.video-content');

            var url = videocontent.attr('data-url');
            videocontent.html("<iframe src='https://player.vimeo.com/video/"
                + url
                + "?title=0&byline=0&portrait=0' style='position:absolute;top:10%;left:10%;width:80%;height:80%;border-radius:8px;' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>"
                + "<script src='https://player.vimeo.com/api/player.js'></script>");

            window.setTimeout(function() {
                videocontainer.addClass('show');
            }, 350);
        });
    });

    // Close slideshow
    $('.video-overlay, .video-container .close').each(function() {
        $(this).on('click tap', function() {
            var videocontent = $(this).parent().find('.video-content');
            videocontent.html('');
            $('.video-container').removeClass('show');
        });
    });

    $(document).keyup(function(e) {
        if (e.keyCode == 27) {
            $('.video-container.show').find('.video-content').html('');
            $('.video-container.show').removeClass('show');
       }
   });
} )( jQuery );
