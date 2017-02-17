$(document).ready(function () {

    //CLICK SMALL IMAGE 
    $('.thumb_click', this).click(function () {
        var large = $('#thumb_1', this).attr('src');
        $('#mainPreviewImg').attr('src', large);
    });


});