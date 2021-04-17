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
                    <li><a href="{{route('post.create')}}"><i class="fas fa-plus-square"></i></a></li>
                    <!----- 新規投稿画面へ ----->
                </ul>
            </nav>
        </header>
        <!----- ヘッダー END ----->

        <!----- メインコンテンツ ----->
        <article>
            <div class="post-change">
                <div class="exit">
                    <a href="{{route('post.index')}}"><i class="fas fa-arrow-left"></i></a>
                </div>
                <div class="change-btn">
                    <div>
                        <a href="">
                            <p>プロフィール画像の変更</p>
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <p>アカウント名の変更</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="iine">
                <p>いいねした投稿</p>
                <div class="iine-box">
                    <div><img src="{{ asset('image/create-img.png') }}" alt="いいねした写真" class="photo"></div>
                    <div><img src="{{ asset('image/create-img.png') }}" alt="いいねした写真" class="photo"></div>
                    <div><img src="{{ asset('image/create-img.png') }}" alt="いいねした写真" class="photo"></div>
                </div>
            </div>
        </article>
        <!----- メインコンテンツ END ----->

    </main>
</body>

</html>