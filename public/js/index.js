$(function(){

    //画面上部移動アニメーション
    $('.scroll-span').on('click',function(){
        $('html,body').animate({
            'scrollTop':0
        },500);
    });

    //ヘッダー移動時アニメーション
    var targetHeight = $('.top-title').height();
    $(window).on('scroll',function(){
        $('header').toggleClass('active',$(this).scrollTop() > targetHeight);
    });

    //registerとloginのアニメーション
    setTimeout(function(){
        $('.form-top').fadeIn(1600)
    },400);
});
