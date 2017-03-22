


$(document).ready(function () {

    //CLICK SMALL IMAGE 
    $('.thumbnail_click', this).click(function () {
        var large = $('.image-large', this).attr('src');
        $('.large-image-block').attr('src', large);
    });


});


$('.multi-item-carousel').carousel({
  interval: false
}); 
$('.multi-item-carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  } else {
  	$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});

