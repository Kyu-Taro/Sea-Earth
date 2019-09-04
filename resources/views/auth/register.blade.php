@extends('template.form')
@section('title','Sea&Earth|会員登録')
@section('href','css/register.css')

<i class="fas fa-bars"></i>
<i class="fas fa-undo"></i>
<div class="menu">
    <span class="comment">Menu</span>
    <ul class="menu-ul">
        <li><a href="/">Top</a></li>
        <li><a href="login">Login</a></li>
        <li><a href="text">Photos</a></li>
        <li><a href="mypage">Mypage</a></li>
    </ul>
</div>

@section('header')
    @component('components.header')
    @slot('link1')
        /
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
        <select name="area">
            <option value="0">選択</option>
            <option value="沖縄">沖縄</option>
            <option value="伊豆半島">伊豆半島</option>
            <option value="千葉・房総半島">千葉・房総半島</option>
            <option value="神奈川">神奈川</option>
            <option value="小笠原">小笠原</option>
            <option value="伊豆諸島">伊豆諸島</option>
            <option value="紀伊半島">紀伊半島</option>
            <option value="九州">九州</option>
            <option value="その他国内">その他国内</option>
            <option vlaue="インド洋・紅海">インド洋・紅海</option>
            <option value="アジア">アジア</option>
            <option value="南アフリカ">南アフリカ</option>
            <option value="太平洋・オーストラリア">太平洋・オーストラリア</option>
            <option value="ミクロネシア">ミクロネシア</option>
            <option value="カリブ海">カリブ海</option>
            <option value="その他海外">その他海外</option>
        </select><br/>
        ショップURL
        @if ($errors->has('url'))
            <span class="error">{{ $errors->first('url') }}</span>
        @endif
        <br/>
        <input type="text" name="url" value="{{ old('url') }}"><br/>
        ショップ誘導希望URL(料金ページなど)
        @if ($errors->has('url2'))
            <span class="error">{{ $errors->first('url2') }}</span>
        @endif
        <br/>
        <input type="text" name="url2" value="{{ old('url2') }}"><br/>
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
        /
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
