<div class="nav">
    <nav class="nav__group">
        <ul class="nav__list">
            @auth
            <li class="nav__item">
                <form action="/logout" method="post">
                    @csrf
                    <button class="nav__button">ログアウト</button>
                </form>
            </li>
            <li class="nav__item">
                <a class="nav__link" href="{{ route('mypage') }}">マイページ</a>
            </li>
            <li class="nav__item">
                <a class="nav__link" href="{{ route('sell') }}">出品</a>
            </li>

            @else
            <li class="nav__item">
                <a class="nav__link" href="{{ route('login') }}">ログイン</a>
            </li>
            <li class="nav__item">
                <a class="nav__link" href="{{ route('register') }}">会員登録</a>
            </li>
            <li class="nav__item">
                <a class="nav__link" href="{{ route('sell') }}">出品</a>
            </li>
            @endauth
        </ul>
    </nav>
</div>