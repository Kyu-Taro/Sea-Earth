<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <title>Sea-Earth|トップページ</title>
</head>
<body>
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
            photos
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
                    Sea&Earthとは海の写真だけを掲載する<br/>
                    写真投稿サイトです<br/>
                    海の写真と言っても、皆さんが普段目にする海ではなく<br/>
                    海の中を覗いている気分になるような<br/>
                    神秘的な水中写真を回覧することができます<br/>
                </p>
                <a href="photos">Go see photos</a>
            </div>
        </div>
    </section>
    <section class="sub-contents">
        <div class="site-width">
            <div class="sub-content">
                <h1>~ご利用について~</h1>
                <p>
                    Sea&Earthではショップ様に会員登録をして頂き<br/>
                    マイページから画像の投稿を行って頂くシステムになっております<br/>
                    基本的には写真の投稿者は、ダイビングショップ様に限らせて頂きます<br/>
                    投稿写真の回覧は全ての利用者の方が回覧、利用が可能となっております<br/>
                    また、回覧には会員登録等の必要もなくご利用いただけます<br/>
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
                    Sea&Earthに投稿される全ての写真に関しまして<br/>
                    全てフリー素材としての利用が可能となっております<br/>
                    また、ショップ様におかれましては<br/>
                    投稿する写真全てフリー素材としての利用を承諾の上<br/>
                    ご利用頂きますようお願い申し上げます<br/>
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
        detail
    @endslot
    @slot('nav3')
        Detail
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
