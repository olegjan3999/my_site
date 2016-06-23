/**
 * Created by inokenty on 17.10.2015.
 */

$(".slider-button").click(function() {

    var attribute = this.attributes[1].nodeValue;

    if(attribute == 'pens'){
        $('.pens-info').removeClass('hidden');
        $('.balon-info').addClass('hidden');
        $('.tin-info').addClass('hidden');
        window.localStorage.setItem('colorType', 'pens');
    }
    if(attribute == 'balon'){
        $('.balon-info').removeClass('hidden');
        $('.pens-info').addClass('hidden');
        $('.tin-info').addClass('hidden');
        window.localStorage.setItem('colorType', 'balon');
    }
    if(attribute == 'tin'){
        $('.tin-info').removeClass('hidden');
        $('.pens-info').addClass('hidden');
        $('.balon-info').addClass('hidden');
        window.localStorage.setItem('colorType', 'tin');
    }


    var thisBlock = $(this).parent();
    var otherBlocks = $(this).parent().siblings(".slider-menu");
   // var allBlocks  = $(this).parent().parent().find(".product-slider-block, #product-slider-arrow");
    var arrow = $(this).parent().siblings("#slider-arrow");
    var form = $(this).parent().siblings("#slider-form");

    otherBlocks.toggleClass("slider-hidden");
    form.toggleClass("slider-hidden");
    //var duration = 400;
    //
    //otherBlocks.animate({
    //    "width": "0px",
    //    "padding": "0px"
    //}, duration, function() {
    //    otherBlocks.addClass("product-slider-hidden");
    //});
    //
    //thisBlock.animate({
    //    "width": "200px"
    //}, duration, function() {
    //    thisBlock.find(".value").css("cursor", "auto");
    //});
    //
    //arrow.show();
    //
    //arrow.animate({
    //    "width": "50px"
    //}, duration, function() {
    //    arrow.removeClass("product-slider-hidden");
    //});
    //
    //form.show();
    //form.animate({
    //    "width": (window.innerWidth / 12) * 8 - 15
    //}, duration, function() {
    //    form.removeClass("product-slider-hidden");
    //    form.removeAttr("style");
    //});

});

//$("#product-slider-arrow").click(function(){
//
//    var arrow = $(this);
//    var otherBlocks = $(this).siblings(".product-slider-block");
//    var form = $(this).siblings(".product-slider-form");
//    var duration = 400;
//
//    arrow.animate({
//        "width": "0px"
//    }, duration, function() {
//        arrow.addClass("product-slider-hidden");
//    });
//
//    otherBlocks.removeClass("product-slider-hidden");
//    otherBlocks.animate({
//        "width": otherBlocks.parent().width() / 3
//    }, duration, function() {
//        otherBlocks.parent().find("*").removeAttr("style");
//    });
//
//    form.animate({
//        "width": "0px"
//    }, duration, function() {
//        form.addClass("product-slider-hidden");
//        form.removeAttr("style");
//    });
//});