@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('header-content')
<div class="header-content">
    <form class="search-content" action="/search" method="get">
        @csrf
        <div class="search-content__item">
            <input type="text" class="search-input" name="keyword" value="{{ old('keyword') }}" placeholder="なにをお探しですか？">
        </div>
        <div class="search-content__button">
            <button class="search-content__button-submit" type="submit"><img class="search__icon--image" src="{{ asset('images/search.svg') }}" alt="Icon description"></button>
        </div>
    </form>

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
                    <a class="nav__link--sell" href="{{ route('sell') }}">出品</a>
                </li>

                @else
                <li class="nav__item">
                    <a class="nav__link" href="{{ route('login') }}">ログイン</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="{{ route('register') }}">会員登録</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link--sell" href="{{ route('sell') }}">出品</a>
                </li>
                @endauth
            </ul>
        </nav>
    </div>
</div>

@endsection



