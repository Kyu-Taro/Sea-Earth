@extends('template.form')
@section('title','Sea&Earth|会員登録')
@section('href','css/register.css')

@section('header')
    @component('components.header')
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

@section('top-title','新規会員登録')
@section('form')
    <form action="register" method="POST">
        @csrf
        ショップ名
        @if ($errors->has('name'))
            <span class="error">{{ $errors->first('name') }}</span>
        @endif
        <br/>
        <input type="text" name="name" value="{{ old('name') }}"><br/>
        メールアドレス
        @if ($errors->has('email'))
            <span class="error">{{ $errors->first('email') }}</span>
        @endif
        <br/>
        <input type="text" name="email" value="{{ old('email') }}"><br/>
        パスワード
        @if ($errors->has('password'))
            <span class="error">{{ $errors->first('password') }}</span>
        @endif
        <br/>
        <input type="password" name="password"><br/>
        パスワード再入力
        @if ($errors->has('password_confirmation'))
            <span class="error">{{ $errors->first('password_confirmation') }}</span>
        @endif
        <br/>
        <input type="password" name="password_confirmation"><br/>
        エリア
        @if ($errors->has('area'))
            <span class="error">{{ $errors->first('area') }}</span>
        @endif
        <br/>
        <input type="text" name="area" value="{{ old('area') }}"><br/>
        ショップURL
        @if ($errors->has('url'))
            <span class="error">{{ $errors->first('url') }}</span>
        @endif
        <br/>
        <input type="text" name="url" value="{{ old('url') }}"><br/>
        ショップ情報
        @if ($errors->has('prof'))
            <span class="error">{{ $errors->first('prof') }}</span>
        @endif
        <br/>
        <textarea name="prof" cols="30" rows="10">{{ old('prof') }}</textarea><br/>
        <input type="submit" value="登録">
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
