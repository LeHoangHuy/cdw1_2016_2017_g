(function ($) {
    "use strict";

    // fixed nav bar scroll
    $(function () {
        var nav_locate = $('.navv-bar').offset(),
                on_top = $('.property-detail').offset();
        $(window).scroll(function () {
            var nav_scroll = $(window).scrollTop();
            if (nav_scroll > ($('.page-title').height() + $('header').height() + 200)) {
                $('.navv-bar').addClass('nav-fix');
                if ($('.header-main').hasClass('hide-menu')) {
                    $('.nav-fix').css("top", "0");
                }
                else {
                    $('.nav-fix').css("top", $('.header-main').height());
                }
            }

            else {
                $('.navv-bar').removeClass('nav-fix');
                $('.navv-bar').css("top", "0");
            }
            ;
            //do man hinh tinh tu bottom
            var scrollBottom =
                    $(document).height() - $(window).height() - $(window).scrollTop();
            /*var gettop =  $('.location').offset().top;*/
             if(scrollBottom < 100) {
                $('.navv-bar').css({'top': '-200px'});
             };
             if(scrollBottom > 100){
                 $('.navv-bar').css({'top': '0px'});
             }

            /* scrolling to target addclass active
             if(nav_scroll >= $(".location").offset().top - $('.nav-bar').height()) {
             $('.active').removeClass('active');
             $('.location-btn').addClass('active');
             };
             */
        });
        /* click scrolling to target
         $('.on-top-btn').on('click', function() {
         $('.active').removeClass('active');
         $('.on-top-btn').addClass('active');
         $('body,html').animate({
         scrollTop: on_top.top - $('.nav-bar').height()
         }, 1500);
         return false;
         });
         
         $('.description-btn').on('click', function() {
         $('.active').removeClass('active');
         $('.description-btn').addClass('active');
         $('body,html').animate({
         scrollTop: $(".description").offset().top - $('.nav-bar').height()
         }, 1500);
         return false;
         });
         */

        // var gallery

    });

})(jQuery);


