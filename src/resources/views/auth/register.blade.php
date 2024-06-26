@extends('layouts.auth')
@section('css')
<link rel="stylesheet" href="css/register.css">
@endsection

@section('button')
<div class="header__button">
    <a class="header__button--switch" href="/login">
        login
    </a>
</div>
@endsection

@section('content')

<h1 class="title">
    Register
</h1>
<div class="form">
    <form class="content__form" action="/register" method="POST">
        @csrf
        <div class="content__form-item">
            <label>お名前</label>
            <input type="text" name="name" value="{{old('name')}}" placeholder="例：山田　太郎">
            <div class="form--error">
                @error('name')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="content__form-item">
            <label>メールアドレス</label>
            <input type="email" name="email" value="{{old('email')}}" placeholder="例：text@example.com">
            <div class="form--error">
                @error('email')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="content__form-item">
            <label>パスワード</label>
            <input type="password" name="password" placeholder="例：coachtech1106">
            <div class="form--error">
                @error('password')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="content__button">
            <button class="content__bottun-submit">
                登録
            </button>
        </div>
    </form>
</div>
@endsection