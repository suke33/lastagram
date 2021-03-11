<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" type="text/css">
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
    <title>lastagram</title>
</head>

<body>
    <main>
        <!----- ヘッダー ----->
        <header>
            <nav>
                <ul>
                    <li>
                        <h1><a href=""><img src="{{ asset('image/logo.svg') }}" alt="lastagram" class="logo"></a></h1>
                    </li>
                    <!----- ホーム画面 ----->
                    <li><a href=""><i class="fas fa-plus-square"></i></a></li>
                    <!----- 新規投稿画面へ ----->
                    <li><a href=""><i class="fas fa-user"></i></a></li>
                    <!----- プロフィール詳細画面へ ----->
                    <li><a href=""><i class="fas fa-sign-out-alt"></i></a></li>
                    <!----- ログアウト ----->
                </ul>
            </nav>
        </header>
        <!----- ヘッダー END ----->

        <!----- メインコンテンツ ----->
        <article>
            <!----- 投稿 ----->
            <div id="post">
                <div class="post-wrapper">
                    <!----- 投稿ここから ----->
                    <div class="post">
                        <div class="post-header">
                            <div class="exit">
                                <a href=""><i class="fas fa-arrow-left"></i></a>
                            </div>
                            <div>
                                <!----- 投稿するボタン ----->
                                <div class="btn">
                                    <a href="">
                                        <p>投稿する</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href=""><img src="{{ asset('image/create-img.png') }}" alt="投稿する写真" class="photo"></a>
                        <div class="comment">
                            <p>コメントを入力…</p>
                        </div>
                    </div>
                    <!----- 投稿ここまで ----->
                </div>
            </div>
            <!----- 投稿 END ----->
        </article>
        <!----- メインコンテンツ END ----->

    </main>
</body>

</html>