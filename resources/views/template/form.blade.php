<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="@yield('href')" type="text/css">
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

    <section class="form-contents">
        <div class="form-top">
            <div class="site-width">
                <h1>@yield('top-title')</h1>
                <div class="form-container">
                    @yield('form')
                </div>
            </div>
        </div>
    </section>

    @yield('footer')
</body>
</html>
