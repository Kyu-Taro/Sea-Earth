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
    <title>@yield('title')</title>
</head>
<body>
    @yield('header')

    <section>
        <div class="text-container">
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
