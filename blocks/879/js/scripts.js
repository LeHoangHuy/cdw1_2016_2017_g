//croll to top
$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $('.croll-up').fadeIn();
    } else {
        $('.croll-up').fadeOut();
    }
});
$('.croll-up').click(function () {
    $('#back-to-top').tooltip('hide');
    $('body,html').animate({
        scrollTop: 0
    }, 800);
    return false;
});
$('.croll-up').tooltip('show');

//$('#productscategory_slider').carousel({
//    interval: 3000
//})
//$('.fdi-Carousel .item').each(function () {
//    var next = $(this).next();
//    if (!next.length) {
//        next = $(this).siblings(':first');
//    }
//    next.children(':first-child').clone().appendTo($(this));
//
//    if (next.next().length > 0) {
//        next.next().children(':first-child').clone().appendTo($(this));
//    } else {
//        $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
//    }
//});

(function () {
    $('#productscategory').carousel({interval: 3600});
}());

(function () {
    $('.fdi-Carousel .item').each(function () {
        var itemToClone = $(this);

        for (var i = 1; i < 3; i++) {
            itemToClone = itemToClone.next();

            // wrap around if at end of item collection
            if (!itemToClone.length) {
                itemToClone = $(this).siblings(':first');
            }

            // grab item, clone, add marker class, add to collection
            itemToClone.children(':first-child').clone()
                    .addClass("cloneditem-" + (i))
                    .appendTo($(this));
        }
    });
}());

// slide show columns
var pos = new Object();
pos.top = 0;

function changeUp() {
    var widthpx = $('.small').css('height');
    var width = parseInt(widthpx) + 20;

    pos.top -= width;
    $('.dress-box-slide').css('top', pos.top + 'px');

    if (pos.top < 0 && pos.top > -width * 2) {
        $('.slide-up').css('visibility', 'visible');
        $('.slide-down').css('visibility', 'visible');
    }
    if (pos.top <= -width * 2) {
        $('.slide-up').css('visibility', 'hidden');
        $('.slide-down').css('visibility', 'visible');
    }
    if (pos.top >= 0) {
        $('.slide-down').css('visibility', 'hidden');
    }
    return pos.top;
}

function changeDown() {
    var widthpx = $('.small').css('height');
    var width = parseInt(widthpx) + 20;

    pos.top += width;
    $('.dress-box-slide').css('top', pos.top + 'px');


    if (pos.top < 0 && pos.top > -width * 2) {
        $('.slide-up').css('visibility', 'visible');
        $('.slide-down').css('visibility', 'visible');
    }
    if (pos.top <= -width * 2) {
        $('.slide-up').css('visibility', 'hidden');
        $('.slide-down').css('visibility', 'visible');
    }
    if (pos.top >= 0) {
        $('.slide-down').css('visibility', 'hidden');
    }
    return pos.top;
}

$(document).ready(function (e) {
    //images click
    $('.small').click(function (e) {
        $('.large').attr('src', $(this).attr('src'));
    });

    // scroll body to 0px on click

});

