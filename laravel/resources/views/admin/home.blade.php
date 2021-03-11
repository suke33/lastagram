<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
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
                    <li><a href="{{route('user.detail')}}"><i class="fas fa-user"></i></a></li>
                    <!----- プロフィール詳細画面へ ----->
                </ul>
            </nav>
        </header>
        <!----- ヘッダー END ----->

        <!----- メインコンテンツ ----->
        <article>
            <!----- プロフィール 大きい画面幅 ----->
            <div class="profile-pc">
                <div class="post-prof">
                    <img src="{{ asset('image/prof-dummy.png') }}">
                    <h2>{{$user->name}}</h2>
                </div>
                <table class="count">
                    <tr class="post-count">
                        <th class="bold">投稿</th>
                        <th class="black">100</th>
                        <th>件</th>
                    </tr>
                    <tr class="follow-count">
                        <td class="bold">フォロー中</td>
                        <td class="black">100</td>
                        <td>人</td>
                    </tr>
                    <tr class="follower-count">
                        <td class="bold">フォロワー</td>
                        <td class="black">100</td>
                        <td>人</td>
                    </tr>
                </table>
            </div>
            <!----- プロフィール END ----->

            <!----- 投稿 ----->
            <div id="post">
                <div class="post-wrapper">
                    <!----- 投稿ここから ----->
                    <div class="post">
                        <div class="post-prof">
                            <div class="post-img">
                                @foreach($posts as $post)
                                <img src="{{$post->image}}">
                                <h2>{{$user->name}}</h2>
                            </div>
                            <div>
                                <!----- 削除ボタン ----->
                                <div class="popup-wrap">
                                    <input id="trigger" type="checkbox">
                                    <div class="popup-overlay">
                                        <label for="trigger" class="popup-trigger"></label>
                                        <div class="popup-content">
                                            <label for="trigger" class="close-btn"><i class="fas fa-times"></i></label>
                                            <p class="bold">本当にこの投稿を削除しますか？</p>
                                            <form action="{{route('post.destroy', ['id' => $post->id])}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit">
                                                    <p class="delete-btn">削除する</p></a>
                                                </button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                                <label for="trigger" class="open-btn"><i class="far fa-trash-alt"></i></label>
                            </div>
                        </div>
                        <img src="{{ asset('image/post-dummy.png') }}" alt="投稿した写真" class="photo">
                        <div class="post-icon">
                            <!----- いいねボタン ----->
                            <div class="like">
                                <i class="far fa-heart"></i>
                            </div>
                            <div>
                                <p>100<span>いいね</span></p>
                            </div>
                        </div>
                        <div class="comment">
                            <p>{{$post->comment}}</p>
                        </div>
                        @endforeach
                    </div>
                    <!----- 投稿ここまで ----->
                </div>
            </div>
            <!----- 投稿 END ----->
        </article>
        <!----- メインコンテンツ END ----->

        <!-- ログアウト処理の一時保管↓　-->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                        this.closest('form').submit();">
                {{ __('Logout') }}
            </x-jet-dropdown-link>
        </form>

    </main>
</body>

</html>