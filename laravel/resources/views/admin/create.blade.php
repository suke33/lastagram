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
                        <h1><a href=""><img src="{{ asset('images/logo.svg') }}" alt="lastagram" class="logo"></a></h1>
                    </li>
                    <!----- ホーム画面 ----->
                    <li><a href="{{route('user.detail')}}"><i class="fas fa-user"></i></a></li>
                    <!----- プロフィール詳細画面へ ----->
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
                                <a href="{{route('post.index')}}"><i class="fas fa-arrow-left"></i></a>
                            </div>
                            <div>
                                <!----- 投稿するボタン ----->
                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <!-- <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
                                <button type="submit" class="btn"><p>投稿する</p></button>
                                @csrf -->
                                {{ Form::open(['route' => 'post.store', 'files' => 'true', 'enctype' => 'multipart/form-data']) }}
                                {{ Form::submit('投稿する', ['class' => 'btn'])}}
                                <!-- </form> -->
                                <!-- <div class="btn">
                                    <a href="">
                                        <p>投稿する</p>
                                    </a>
                                </div> -->
                            </div>
                        </div>
                        <label>
                        <div class="file2"></div>
                        {{ Form::file('image', ['name' => 'image', 'class' => 'img-file', 'accept' => 'image/png']) }}
</label>
                        <!-- <a href=""><img src="{{ asset('image/create-img.png') }}" alt="投稿する写真" class="photo"></a> -->
                        {{ Form::text('comment', null, ['class' => 'comment', 'placeholder' => 'コメントを入力…'])}}
                        <!-- <div class="comment">
                            <p>コメントを入力…</p>
                        </div> -->
                        {{ Form::close() }}
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