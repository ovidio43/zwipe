// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }

    $('#top-slide').bxSlider({
        mode: 'fade',
        auto: true,
        pause: 6000,
        pager: false
    });
    $('#second-slide').bxSlider({
        mode: 'fade',
        auto: true,
        pause: 8000,
        controls: false
    });     
    $('.carrousel-slide').bxSlider({
        minSlides: 2,
        maxSlides: 3,
        slideWidth: 260,
        slideMargin: 20,
        pager: false
    });   
    $('.carrousel-slide-news').bxSlider({
        minSlides: 1,
        maxSlides: 2,
        slideWidth: 220,
        slideMargin: 0,
        pager: false
    });
    $('.carrousel-news').bxSlider({
        minSlides: 2,
        maxSlides: 4,
        slideWidth: 237,
        slideMargin: 0,
        pager: false
    });
    $('.acf-map').each(function(){
        render_map( $(this) );
    });
}());

// Place any jQuery/helper plugins in here.
