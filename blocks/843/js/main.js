// JavaScript Document
var a = 0;
var b = 0;
var c = 0;
//----Sroll to top
$(function() {
    $('#header-cart').click(function () {
        if ( a == 0) {
            document.getElementById('panel').style.display = 'block';
            a++;
        }else {
            document.getElementById('panel').style.display = 'none';
            a--;
        }
    });
    $('.tm_headerlinks_inner').click(function () {
        if ( c == 0) {
            document.getElementById('panel1').style.display = 'block';
            c++;
        }else {
            document.getElementById('panel1').style.display = 'none';
            c--;
        }
    });
    $(window).scroll(function() {
        if ($(this).scrollTop() > 0) {
            $('.bttop').fadeIn();  
        } else {
            $('.bttop').fadeOut();
        }
    });
    
    $('.bttop').click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
    });
}); //----Sroll to top

$(function() {
    $('#plus1').click(function(){
        document.getElementById('plus-1').style.display = 'block';
        document.getElementById('plus1').style.display = 'none';
    })
    $('#plus-1').click(function(){
        document.getElementById('plus-1').style.display = 'none';
        document.getElementById('plus1').style.display = 'block';
    })
    $('#plus4').click(function(){
        document.getElementById('plus').style.display = 'block';
        document.getElementById('plus4').style.display = 'none';
    })
    $('#plus').click(function(){
        document.getElementById('plus4').style.display = 'block';
        document.getElementById('plus').style.display = 'none';
    })
    $('#plus3').click(function(){
        document.getElementById('plus-3').style.display = 'block';
        document.getElementById('plus3').style.display = 'none';
    })
    $('#plus-3').click(function(){
        document.getElementById('plus-3').style.display = 'none';
        document.getElementById('plus3').style.display = 'block';
    })
  
});
//----menu-header
$(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 142 && $(this).width() > 962) {
            
            document.getElementById('menu-top').style.position = 'fixed';
            document.getElementById('menu-top').style.top = '0';    
            document.getElementById('menu-top').style.background = '#000000';
            document.getElementById('item').style.color = '#ffffff';
            document.getElementById('item1').style.color = '#ffffff';
            document.getElementById('item2').style.color = '#ffffff';
            document.getElementById('item3').style.color = '#ffffff';
            document.getElementById('item4').style.color = '#ffffff';
            document.getElementById('item5').style.color = '#ffffff';
            
        } else {
            
            document.getElementById('menu-top').style.position = 'relative';
            document.getElementById('menu-top').style.top = '0';
            document.getElementById('menu-top').style.background = '#ffffff';
            document.getElementById('item').style.color = '#000000';
            document.getElementById('item1').style.color = '#000000';
            document.getElementById('item2').style.color = '#000000';
            document.getElementById('item3').style.color = '#000000';
            document.getElementById('item4').style.color = '#000000';
            document.getElementById('item5').style.color = '#000000';
            
            
        }
    });
}); //----Menu-header

// plus

//----menu-header-right
$(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 142 && $(this).width() > 962) {
            document.getElementById('header-right').style.position = 'fixed';
            document.getElementById('header-right').style.top = '0px';
            document.getElementById('header-right').style.right = '0px';
            document.getElementById('header-right').style.marginTop = '0px';
            document.getElementById('header-right').style.marginRight = '10px';
        } else {
           
            document.getElementById('header-right').style.position = 'static';
            document.getElementById('header-right').style.marginTop = '37px';
            document.getElementById('header-right').style.marginRight = '0px';
            
        }
    });
}); //----Menu-header

// JavaScript Document
// Slide lang
$(document).ready(function(){
    $(".slide-lang").click(function(){
        $(".slide-lang-inner").slideToggle("medium");
    });
});

//main-slider
/*
$(function(){
    $('#main-slider.carousel').carousel({
        interval: 8000
    });
});
*/

$(document).ready(function() {
    $('.carousel').carousel();
});

   


