<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/cdebaefb03.js"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-9538746713975091",
            enable_page_level_ads: true
        });
    </script>
    <title>Sea-Earth|トップページ</title>
</head>
<body>
    @if (session('fls_msg'))
        <p class="fls_msg">{{ session('fls_msg') }}</p>
    @endif
    <i class="fas fa-bars"></i>
    <i class="fas fa-undo"></i>
    <div class="menu">
        <span class="comment">Menu</span>
        <ul class="menu-ul">
            <li><a href="login">Login</a></li>
            <li><a href="register">Register</a></li>
            <li><a href="text">Photos</a></li>
            <li><a href="mypage">Mypage</a></li>
        </ul>
    </div>

    @component('components.header')
        @slot('link1')
            login
        @endslot
        @slot('nav1')
            Login
        @endslot
        @slot('link2')
            register
        @endslot
        @slot('nav2')
            Register
        @endslot
        @slot('link3')
            text
        @endslot
        @slot('nav3')
            Photos
        @endslot
        @slot('link4')
            mypage
        @endslot
        @slot('nav4')
            Mypage
        @endslot
    @endcomponent

    <section class="top-title">
        <h1>
            Sea&Earth<br/>
            Let's look into the sea
        </h1>
    </section>
    <section class="top-contents">
        <div class="site-width">
            <div class="top-content">
                <h1>~Sea&Earthとは~</h1>
                <p>
                    Sea&Earthとは<br class="res">海の写真だけを掲載する<br/>
                    写真投稿サイトです。<br/>
                    海の写真と言っても<br class="res">皆さんが普段目にする<br class="res">海ではなく<br/>
                    海の中を覗いている気分<br class="res">になるような<br/>
                    神秘的な水中写真を<br class="res">回覧することができます<br/>
                </p>
                <a href="text">Go see photos</a>
            </div>
        </div>
    </section>
    <section class="sub-contents">
        <div class="site-width">
            <div class="sub-content">
                <h1>~ご利用について~</h1>
                <p>
                    Sea&Earthではショップ様に<br class="res">会員登録をして頂き<br/>
                    マイページから画像の投稿を<br class="res">行って頂くシステムに<br class="res">なっております。<br/>
                    基本的には写真の投稿者は<br class="res">ダイビングショップ様に<br class="res">限らせて頂きます<br/>
                    投稿写真の回覧は<br class="res">全ての利用者の方が回覧、利用が<br class="res">可能となっております。<br/>
                    また回覧には<br class="res">会員登録等の必要もなく<br class="res">ご利用いただけます<br/>
                </p>
                <a href="register">Member registration</a>
            </div>
        </div>
    </section>
    <section class="detail">
        <div class="site-width">
            <div class="detail-content">
                <h1>~ご利用に際しての注意~</h1>
                <p>
                    Sea&Earthに投稿される<br class="res">全ての写真に関しまして<br/>
                    全てフリー素材としての<br class="res">利用が可能となっております<br/>
                    また、ショップ様におかれましては<br/>
                    投稿する写真は全て<br class="res">フリー素材としての<br class="res">利用を承諾の上<br/>
                    ご利用頂きますよう<br class="res">お願い申し上げます<br/>
                </p>
            </div>
        </div>
    </section>

    @component('components.footer')
    @slot('link1')
        login
    @endslot
    @slot('nav1')
        Login
    @endslot
    @slot('link2')
        register
    @endslot
    @slot('nav2')
        Register
    @endslot
    @slot('link3')
        text
    @endslot
    @slot('nav3')
        Photos
    @endslot
    @slot('link4')
        mypage
    @endslot
    @slot('nav4')
        Mypage
    @endslot
    @endcomponent
</body>
</html>
