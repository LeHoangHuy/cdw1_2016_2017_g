
$(document).ready(function () {

////RELOAD PAGE WHEN RESIZE
    window.onresize = function (event)
    {
        document.location.reload(true);
    };

    //COUNT DOWN SLIDE SHOW 
    var count = 2;
    $('.mobileMenuTitle').click(function () {
        if (count % 2 === 0) {
            $('.mega-menu-ul').css("display", "block");
            count = 3;
        } else {
            $('.mega-menu-ul').css("display", "none");
            count = 2;
        }
    });

    //SEARCH RESIZE
    if ($(window).width() > 728) {
        $('.search_query', this).click(function () {
            $('#search_block_top').css({'width': '300px'});
        });
        //CLICK OUTSIDE
        $('.search_query', this).blur(function () {
            $('#search_block_top').css({'width': '230px'});
        });
    }



    //  DROPDOWN
    if ($(window).width() > 728) {
        $(".dropdown2").hover(
                function () {
                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).fadeIn("400");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).fadeOut("400");
                    $(this).toggleClass('open');
                }
        );
    }
    //HEADER
    $(".dropdown1").hover(
            function () {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).fadeIn("400");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).fadeOut("400");
                $(this).toggleClass('open');
            }
    );
    if ($(window).width() < 728) {
        var i = 0;
        $(".dropdown2", this).click(function () {
            if (i % 2 !== 0) {
                $('span.opener', this).removeClass("close");
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).fadeOut("400");
                $(this).toggleClass('open');
            } else {
                $('span.opener', this).addClass("close").css({'font-size': '28px', 'color': '#009900', 'opacity': '1'});
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).fadeIn("400");
                $(this).toggleClass('open');
            }
            i++;

        });


    }
   

   
    //CAROUSEL DUONGTM
    $('.carousel[data-type="multi"] .item', this).each(function () {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
        if ($(window).width() > 980) {
            for (var i = 0; i < 3; i++) {
                next = next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));
            }
        } else if ($(window).width() > 728) {
            for (var i = 0; i < 1; i++) {
                next = next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));
            }
        } else if ($(window).width() < 728) {
            for (var i = 0; i < 0; i++) {
                next = next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));
            }
        }
    });
    //CAROUSEL VIET
    $('.carousel[data-type="viet"] .item').each(function () {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
        if ($(window).width() > 980) {
            for (var i = 0; i < 2; i++) {
                next = next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));
            }
        } else if ($(window).width() < 728) {
            for (var i = 0; i < 0; i++) {
                next = next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));

            }
        }
    });

    //SELECT
    $(document).ready(function () {
        $(".btn-select").each(function (e) {
            var value = $(this).find("ul li.selected").html();
            if (value !== undefined) {
                $(this).find(".btn-select-input").val(value);
                $(this).find(".btn-select-value").html(value);
            }
        });
    });

    $(document).on('click', '.btn-select', function (e) {
        e.preventDefault();
        var ul = $(this).find("ul");
        if ($(this).hasClass("active")) {
            if (ul.find("li").is(e.target)) {
                var target = $(e.target);
                target.addClass("selected").siblings().removeClass("selected");
                var value = target.html();
                $(this).find(".btn-select-input").val(value);
                $(this).find(".btn-select-value").html(value);
            }
            ul.hide();
            $(this).removeClass("active");
        } else {
            $('.btn-select').not(this).each(function () {
                $(this).removeClass("active").find("ul").hide();
            });
            ul.slideDown(300);
            $(this).addClass("active");
        }
    });

    $(document).on('click', function (e) {
        var target = $(e.target).closest(".btn-select");
        if (!target.length) {
            $(".btn-select").removeClass("active").find("ul").hide();
        }
    });

    //END SELECT



    //HIDE AND SHOW CATEGORIES_ 
    $(document).on('click', 'form span.layered_close a', function (e) {
        if ($(this).html() === '&lt;') {
//            $('.dropdown-categories', this).not('.in .dropdown-categories').stop(true, true).slideDown("400");
            $('#' + $(this).data('rel')).stop(true, true).slideDown("400");
            $(this).html('v');
//            $('form span.layered_close').removeClass('closed');
            $(this).parent().removeClass('closed');
        } else {
//            $('.dropdown-categories', this).not('.in .dropdown-categories').top(true, true).slideDown("300");
            $('#' + $(this).data('rel')).stop(true, true).slideUp("300");
            $(this).html('&lt;');
            $(this).parent().addClass('closed');
        }
        e.preventDefault();
    });

    //CLICK SMALL IMAGE 
    $('.thumbnail_click', this).click(function () {
        var large = $('.image-large', this).attr('src');
        $('.large-image-block').attr('src', large);
    });
});


$('#mylogo').carousel({
    interval: 40000
});

$('.carousel-logo .item').each(function () {
    var next = $(this).next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    if (next.next().length > 0) {

        next.next().children(':first-child').clone().appendTo($(this)).addClass('rightest');

    } else {
        $(this).siblings(':first').children(':first-child').clone().appendTo($(this));

    }
});



$(document).ready(function () {

    //CLICK SMALL IMAGE 
    $('.thumbnail_click', this).click(function () {
        var large = $('.image-large', this).attr('src');
        $('.large-image-block').attr('src', large);
    });


});


