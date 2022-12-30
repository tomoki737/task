<nav class="navbar navbar-expand-sm navbar-light border-bottom py-3 bg-white mb-3 px-5">
    <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home')}}">ホーム</a>
            <ul class="navbar-nav ms-auto">
                @auth
                <a class="btn btn-primary" href="{{ route('articles.create') }}" role="button">作成</a>
                @endauth
                @guest
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('login')}}">ログイン</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('register')}}">新規登録</a>
                </li>
                @endguest
            </ul>
    </div>
</nav>
