$(function () {
    $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).fadeIn("400");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).fadeOut("400");
                $(this).toggleClass('open');
            }
    );
});

//dropdown menu
if ($(window).width() < 728) {
    $(".dropdown").click(
            function () {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("fast")
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
    );
}

$(document).ready(function () {

    var count = 2;
    $('.mobileMenuTitle').click(function () {
        if (count % 2 == 0) {
            $('.mega-menu-ul').css("display", "block");
            count = 3;
        } else {
            $('.mega-menu-ul').css("display", "none");
            count = 2;
        }
    });



    //search
    $('.search_query', this).click(function () {
        $('#search_block_top').css({'width': '300px'});
    });

    $('.search_query', this).blur(function () {
        $('#search_block_top').css({'width': '230px'});
    });

    if ($(window).width() < 728) {

        $('.search_query', this).click(function () {
            $('#search_block_top').css({'width': '300px'});
        });

        $('.search_query', this).blur(function () {
            $('#search_block_top').css({'width': '300px'});
        });
    }
});
