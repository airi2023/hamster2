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
            <a class="navbar-brand" href="/">はむはむハウス</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-md-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Top</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/news">新着情報</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/#type">ハムスターの種類</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/#goods">飼育グッズ</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/price">飼育費用は？</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/#access">店舗紹介</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/#contact">お問い合わせ</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link adminbtn" href="/admin-top">従業員用</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    {{-- トップページ --}}
    {{-- <img src="{{ asset('images/1.jpg')}}"> --}}
    {{-- <div class="top"></div> --}}
    <!-- スライダー -->
    <div id="carousel-2" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-pause="false"
        data-bs-interval="10000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/slide3.jpg" class="d-block w-100" alt="First slide">
            </div>
            <div class="carousel-item">
                <img src="images/slide2.jpg" class="d-block w-100" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img src="images/slide1.jpg" class="d-block w-100" alt="Third slide">
            </div>
        </div>

        <div class="slider-text">
            <h2>小さな足跡、大きな幸福。</h2>
            <h2>ハムスターとの素敵な出会いが、</h2>
            <h2>ここにあります。</h2>
            <p>ハムスター専門ペットショップ｜はむはむハウス</p>
        </div>

        <div class="scrolldown">
            <div class="chevron"></div>
            <div class="chevron"></div>
            <div class="chevron"></div>
            <span class="text"><a href="#">Scroll down</a></span>
        </div>
    </div>



    <div class="contents">
        {{-- @yield('body') <!-- 子bladeを挿入する部分 --> --}}

        <section class="blurBg" id="reserve">
            <h3>飼育費用のお見積り</h3>
            <a class="btn" href="/price" role="button">お見積り &raquo;</a>
        </section>

        <section id="new">
            <div class="container">
                <h3>新着情報</h3>
                <p class="intro">
                    可愛らしい新しい仲間たちが入荷しました！<br>ゴールデンハムスター、ジャンガリアンハムスター、ロボロフスキーハムスターなど、さまざまな種類のハムスターがお店にやってきました。<br>当店のハムスターたちの元気な様子や新商品のご案内をお届けします。ぜひご覧ください！

                </p>
                {{-- <a class="btn" href="/" role="button">詳しくはこちら &raquo;</a> --}}
            </div>

            <br>

            <div class="container">
                <div class="row">

                    <div class="col-md-12 article-wrap">
                        @foreach ($articles->take(6) as $article)
                            <div class="col-md-4">
                                <div class="card m-3 p-4">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $article->title }}</h4>
                                        <h6 class="card-subtitle">{{ $article->updated_at }}</h6>
                                        <div class="wrap-img"><img src="storage/{{ $article->item_img }}" width='100%'></div>
                                        <h5>{{ $article->price . "円（税込）" }}</h5>
                                        <p class="card-text">{{ $article->body }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- <div class="col-md-3">
                        <h3>New!</h3>
                        <img class="d-block w-100" src="/images/slide1.jpg">
                        <br>
                        <div class="section_padding">
                            <h4>ゴールデン(♀)</h4>
                        </div>
                        <p>生後3ヶ月の女の子。穏やかで人懐っこい性格です。食べることが大好きで、もりもりごはんを食べます。</p>
                        <a class="btn">1890円(税込)</a>
                    </div>

                    <div class="col-md-3">
                        <h3>New!</h3>
                        <img class="d-block w-100" src="/images/slide2.jpg">
                        <br>
                        <div class="section_padding">
                            <h4>ジャンガリアン(♂)</h4>
                        </div>
                        <p>生後3ヶ月の男の子。心優しい性格で、ちょっぴりおくびょうな子です。ものかげに隠れて、こっそりこちらを見ている姿が可愛らしいです。</p>
                        <a class="btn">1890円(税込)</a>
                    </div>

                    <div class="col-md-3">
                        <h3>New!</h3>
                        <img class="d-block w-100" src="/images/slide3.jpg">
                        <br>
                        <div class="section_padding">
                            <h4>ジャンガリアン(♀)</h4>
                        </div>
                        <p>生後3ヶ月の女の子。元気いっぱいで活発な性格です。よくおもちゃで遊んでいます。最近のお気に入りはかじり木。</p>
                        <a class="btn">1890円(税込)</a>
                    </div>

                    <div class="col-md-3">
                        <h3>New!</h3>
                        <img class="d-block w-100" src="/images/slide4.jpg">
                        <br>
                        <div class="section_padding">
                            <h4>ロボロフスキー(♀)</h4>
                        </div>
                        <p>生後2ヶ月の女の子。のんびり屋で眠ることが大好きです。手の平の上でもお構いなしにお昼寝します。
                        </p>
                        <a class="btn">1890円(税込)</a>
                    </div> --}}

                    <a class="btn more" href="/news" role="button">More &raquo;</a>
                </div>
            </div> <!-- /container -->
        </section>



        <section id="type">
            <div class="container">
                <h3>ハムスターの種類</h3>

                <p>ハムスターは可愛らしさと親しみやすさで人気のペットですが、自分にぴったりのハムスターを見つけるには、ハムスターの種類を理解することが重要です。
                    <br>この記事では、代表的なハムスターの種類（ゴールデン、ジャンガリアン、ロボロフスキー）とそれぞれの性格に焦点を当ててご紹介します。
                </p>
            </div> <!-- /container -->

            <div class="inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 section_padding">
                            <h4>ゴールデンハムスター</h4>
                            <p>成体で体長が約15～20センチメートルになり、ジャンガリアンハムスターよりもやや大きいです。<br>一般的にはおおらかで人懐っこい性格が多いです。飼い主とのコミュニケーションを楽しむことが好きで、手からエサを受け取るしぐさが可愛らしいです。活発で好奇心旺盛な一面もあります。
                            </p>
                        </div>

                        <div class="col-md-6">
                            <img src="/images/slide1.jpg" alt="">
                        </div>
                    </div>
                </div> <!-- /container -->

                <div class="container">
                    <div class="row">
                        <div class="col-md-6 section_padding">
                            <h4>ジャンガリアン</h4>
                            <p>ジャンガリアンハムスターは小型で、背中に縞模様が特徴的です。様々な毛色や模様の個体が存在します。<br>元気で活発な性格が多く、独立心が強い傾向があります。比較的控えめで、慎重な一面も見られます。群れを作ることが好きで、同じくらいの大きさや性格の仲間と一緒に飼われると幸せそうです。
                            </p>
                        </div>

                        <div class="col-md-6">
                            <img src="/images/slide3.jpg" alt="">
                        </div>
                    </div>
                </div> <!-- /container -->

                <div class="container">
                    <div class="row">
                        <div class="col-md-6 section_padding">
                            <h4>ロボロフスキー</h4>
                            <p>小型で短い尾と明るい色の被毛が特徴です。小顔かつ愛らしい外見が人気です。<br>社交的で社会性が強い傾向があります。他のハムスターよりも群れでの飼育に向いています。
                            </p>
                        </div>

                        <div class="col-md-6">
                            <img src="/images/slide4.jpg" alt="">
                        </div>
                    </div>
                </div> <!-- /container -->
            </div>
        </section>


        <section id="goods">
            <div class="container">
                <h3>飼育グッズ</h3>
                {{-- <img class="d-block w-100" src="/images/1.jpg"> --}}
                <p class="intro">ハムスターの飼育は、快適な環境を整えることが重要です。<br>ここでは、ハムスターの飼育に不可欠な飼育グッズであるケージと回し車について詳しく紹介します。
                </p>
                {{-- <a class="btn" href="/" role="button">詳しくはこちら &raquo;</a> --}}
            </div>

            <br>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>ハムスターのおうち</h3>
                        <img class="d-block w-100" src="/images/goods1.jpg">
                        <br>
                        <p>
                            サイズとレイアウト:<br>
                            ケージのサイズはハムスターが自由に動き回れるスペースを確保するために重要です。最低限の広さと、複数の階やトンネルがあるとハムスターの好奇心を刺激します。</p>
                        <p>
                            通気性と掃除のしやすさ:<br>

                            通気性の良いケージがハムスターの健康に寄与します。また、掃除がしやすく、清潔な環境を維持できるデザインを選ぶと良いでしょう。</p>
                        <p>
                            材質と耐久性:<br>

                            安全な素材でできたケージを選びましょう。また、耐久性があり、ハムスターが歯で噛んでも安全な構造が望ましいです。<br><br>
                            <a class="btn">3890円(税込)</a>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h3>回し車</h3>
                        <img class="d-block w-100" src="/images/goods2.jpg">
                        <br>
                        <p>
                            エクササイズとストレス発散:<br>
                            回し車はハムスターが運動するために欠かせません。十分なエクササイズを得ることで、ハムスターの健康を維持し、ストレスを解消できます。</p>
                        <p>
                            静音性と安全性:<br>
                            静音性があり、ハムスターが安心して使える回し車を選ぶと良いです。また、ハムスターの足が挟まる危険性のないデザインも重要です。</p>
                        <p>
                            適切なサイズ:<br>
                            回し車の直径はハムスターの背中から尾までの長さよりも大きくなるように選びましょう。小型種は小さめのサイズが適しています。<br><br>
                            <a class="btn">2890円(税込)</a>
                        </p>
                    </div>
                </div>
            </div> <!-- /container -->
        </section>


        <section class="top1" id="access">
            <div class="container">
                <h3>店舗紹介</h3>
                <p>【住所】<br>
                    〒000-0000 大阪府大阪市北区ハムスターシティー通り123番地</p>

                <p>【アクセス】<br>
                    最寄り駅: 大阪駅 徒歩3分<br>
                </p>

                <p>【営業時間】<br>
                    平日: 10:00〜19:00<br>
                    土日祝: 11:00〜18:00</p>
                <p>
                    【定休日】<br>
                    毎週水曜日</p>

                <p>ハムスターとの心温まる出会いをお楽しみください。お待ちしております！
                </p>
            </div>

            <br>

            <div class="google-maps container-fluid">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d104994.77058365803!2d135.4160245997024!3d34.677764242137584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6553406e2e1%3A0xc55bc16ee46a2fe7!2z5aSn6Ziq5bqc5aSn6Ziq5biC!5e0!3m2!1sja!2sjp!4v1582540954527!5m2!1sja!2sjp"
                    width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </section>


        <section id="contact">
            <div class="container">
                <h3>お問い合わせ</h3>
                {{-- <img class="d-block w-100" src="/images/1.jpg"> --}}
                <p class="intro">当店のスタッフはハムスターの専門家ばかり。<br>
                    ハムスターに関する疑問や相談事は何でもお気軽にお聞かせください。<br>
                    専門的なアドバイスで、より良いハムスターライフをサポートします。
                </p>
                {{-- <a class="btn" href="/" role="button">詳しくはこちら &raquo;</a> --}}
            </div> <!-- /container -->

            <div class="container">
                <div class="main container-fluid">
                    <div class="row text-dark py-5">
                        <div class="col-md-8 offset-md-2">
                            <form method="post" action="mail.php">
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="お名前" placeholder="名前（必須）"
                                        value="">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="住所" placeholder="住所"
                                        value="">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="Email"
                                        placeholder="メールアドレス（必須）" value="">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="電話番号" placeholder="電話番号"
                                        value="">
                                </div>
                                <div class="mb-4">
                                    <textarea class="form-control" name="お問い合わせ内容" rows="5" placeholder="メッセージを入力してください"></textarea>
                                </div>
                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckIndeterminate">
                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                        利用規約に同意します。<a href="" target="_blank" rel="noopener noreferrer"
                                            class="text-decoration-underline text-dark">プライバシーポリシーはこちら</a>
                                    </label>
                                </div>
                                <div class="text-center pt-4 col-md-6 offset-md-3">
                                    <button type="submit" class="btn btn-primary">送信</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>



        <footer>
            <div class="container footer">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Top</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#new">新着情報</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#type">ハムスターの種類</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#goods">飼育グッズ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#price">飼育費用は？</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#access">店舗紹介</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#contact">お問い合わせ</a>
                    </li>
                </ul>
                <p>〒000-0000 大阪府大阪市000-00<br>
                    TEL：0000-00-0000 / FAX：0000-00-0000</p>
            </div>

            <div class="container address">
                <address>&copy; はむはむハウス 2023 All Rights Reserved.</address>
            </div>
        </footer>

        <script>
            jQuery(function($) {
                $('section').addClass('fadeIn');
                $(window).on('load scroll', function() {

                    var box = $('.fadeIn');
                    var animated = 'animated';

                    box.each(function() {

                        var boxOffset = $(this).offset().top;
                        var scrollPos = $(window).scrollTop();
                        var wh = $(window).height();

                        if (scrollPos > boxOffset - wh + 100) {
                            $(this).addClass(animated);
                        }
                    });
                });
            })
        </script>

</body>

</html>
