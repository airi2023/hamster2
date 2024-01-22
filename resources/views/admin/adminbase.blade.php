<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 検索除け -->
    <meta name="robots" content="noindex, nofollow">

    <!-- リセットCSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">

    <!-- BootStrap読み込み -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- app.cssはresourceフォルダ内（コンパイル前なので）-->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <!-- 自作CSS publicフォルダ内（コンパイル不要なので） ※BootStrap読み込みより下に記述することで、優先度高-->
    <link rel="stylesheet" href="{{ asset('css/topstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    <!-- jQuery（スライダーとナビ開閉とフェードイン） BootstrapのJSより先に読み込み（順番違うとスライダー動かなくなるので注意）-->
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"
        integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>

    <!-- Bootstrap 5 のJavaScript Bundle with Popper-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    <!-- Googleフォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic&display=swap" rel="stylesheet">

    <title>ハムスター専門ペットショップ｜はむはむハウス</title>
</head>

<body>
    <header>
        <!-- ナビ -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="/">はむはむハウス｜管理者用</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent"> --}}
            <div class="collapse navbar-collapse justify-content-md-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin-top">管理者用Top</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="/admin-news">新着情報管理</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/admin-goods">商品管理</a>
                    </li>

                    <!-- ドロップダウンタイプ -->
                    {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Reserve
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">予約明細</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li> --}}
                    <!-- ドロップダウンタイプここまで -->

                </ul>
            </div>
        </nav>
    </header>



    <div class="contents">
        <!-- 子bladeを挿入する部分 -->
        @yield('contents')
    </div>



    <footer>
        <address>&copy; はむはむハウス 2023 All Rights Reserved.</address>
    </footer>

</body>

</html>
