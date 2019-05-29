

(function($) {
    "use strict";
    jQuery(document).ready(function($){


        $('#main_menu').slicknav({
            prependTo:'.tdows-responsive-menu',
            nestedParentLinks: true,
        });
        // $('#main_menu').slicknav('close');

        $('.testimonial-slider-wrap`').owlCarousel({
            items: 1,
            loop: true,
            dots: false,
            nav: true,
            navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>\n', '<i class="fa fa-angle-right" aria-hidden="true"></i>\n'],
            smartSpeed:1000,
            autoplay:true,

        });

    });



})(jQuery);







