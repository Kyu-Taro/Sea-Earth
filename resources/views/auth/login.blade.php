@extends('template.form')
@section('href','css/login.css')
@section('title','Sea&Earth|ログイン')

@section('header')
    @component('components.header')
    @slot('link1')
        index
    @endslot
    @slot('nav1')
        Top
    @endslot
    @slot('link2')
        register
    @endslot
    @slot('nav2')
        Register
    @endslot
    @slot('link3')
        photos
    @endslot
    @slot('nav3')
        Photos
    @endslot
    @slot('link4')
        mypage
    @endslot
    @slot('nav4')
        Mypage
    @endslot
    @endcomponent
@endsection

@section('top-title','ログイン')
@section('form')
    <form action="login" method="POST">
        @if (!empty(session('error')))
            <span class="error">{{ session('error') }}</span><br/>
        @endif
        @csrf
        メールアドレス
        @if ($errors->has('email'))
            <span class="error">{{ $errors->first('email') }}</span>
        @endif
        <br>
        <input type="text" name="email" value="{{ old('email') }}"><br/>
        パスワード
        @if ($errors->has('password'))
            <span class="error">{{ $errors->first('password') }}</span>
        @endif
        <input type="password" name="password"><br/>
        <input type="checkbox" value="1" name="check">ログイン状態を保持する
        <input type="submit" value="ログイン">
    </form>
@endsection

@section('footer')
@component('components.footer')
    @slot('link1')
        index
    @endslot
    @slot('nav1')
        Top
    @endslot
    @slot('link2')
        login
    @endslot
    @slot('nav2')
        Login
    @endslot
    @slot('link3')
        detail
    @endslot
    @slot('nav3')
        Detail
    @endslot
    @slot('link4')
        mypage
    @endslot
    @slot('nav4')
        Mypage
    @endslot
    @endcomponent
@endsection
