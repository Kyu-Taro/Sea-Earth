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

    //マイページのアニメーション
    setTimeout(function(){
        $('.mypage-container').fadeIn(1600)
    },400);

    //画像詳細のアニメーション
    setTimeout(function(){
        $('.text-contents').fadeIn(1600)
    },400);

    //画像詳細のアニメーション
    setTimeout(function(){
        $('.shopDetail-contents').fadeIn(1600)
    },400);

    //画面プレビュー
    var $dropArea = $('.area-drop');
    var $fileInput = $('.input-file');
    $dropArea.on('dragover',function(e){
        e.stopPropagation();
        e.preventDefault();
        $(this).css('border','3px #ccc dashed');
    });

    $dropArea.on('dragleave',function(e){
        e.stopPropagation();
        e.preventDefault();
        $(this).css('border','none');
    });

    $fileInput.on('change',function(e){
        $dropArea.css('border','none');
        var file = this.files[0];
        $img = $(this).siblings('.prev-img');
        fileReader = new FileReader();
        fileReader.onload=function(event){
            $img.attr('src',event.target.result).show();
        };
        fileReader.readAsDataURL(file);
    });

    //各ページのスライドトグル
        //サクセスメッセージ表示
        var $msg_suc = $('.fls_msg');
        var msg = $msg_suc.text();

        if(msg.replace(/^[\s　]+|[\s　]+$/g, "").length){
            $msg_suc.slideToggle('slow');
            setTimeout(function(){ $msg_suc.slideToggle('slow'); }, 4000);
        }

    //レスポンシブメニュー
    var $menu = $('i.fa-bars');
    $menu.on('click',function(){
        $('.menu').fadeIn();
        $menu.css('display','none');
        $('i.fa-undo').fadeIn();
    });

    var $back = $('i.fa-undo');
    $back.on('click',function(){
        $('.menu').fadeOut();
        $back.css('display','none');
        $('i.fa-bars').fadeIn();
    });
});
