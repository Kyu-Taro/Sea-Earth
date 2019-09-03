<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="@yield('href')">
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
    <title>@yield('title')</title>
</head>
<body>
    @yield('header')

    <section>
        <div class="text-container">
            <div class="kou-container res">
                <a class="reskou" href="https://px.a8.net/svt/ejp?a8mat=35NQEK+98TBXU+AD2+2HCY6P" rel="nofollow">
                    <img class="reskou" border="0" width="234" height="60" alt="" src="https://www22.a8.net/svt/bgt?aid=190903916559&wid=001&eno=01&mid=s00000001343015009000&mc=1"></a>
                    <img class="reskou" border="0" width="1" height="1" src="https://www12.a8.net/0.gif?a8mat=35NQEK+98TBXU+AD2+2HCY6P" alt="">
            </div>
            <a class="kou on" href="https://px.a8.net/svt/ejp?a8mat=35NQEK+98TBXU+AD2+2HCY6P" rel="nofollow">
                <img class="kou on" border="0" width="234" height="60" alt="" src="https://www22.a8.net/svt/bgt?aid=190903916559&wid=001&eno=01&mid=s00000001343015009000&mc=1"></a>
                <img class="kou on" border="0" width="1" height="1" src="https://www12.a8.net/0.gif?a8mat=35NQEK+98TBXU+AD2+2HCY6P" alt="">
            <div class="text-contents">
                <div class="site-width">
                    <div class="text-content">
                        <h1>@yield('top-title')</h1>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </section>

    @yield('footer')
</body>
</html>
