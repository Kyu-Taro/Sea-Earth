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
        ショップエリア
        @if ($errors->has('area'))
            <span class="error">{{ $errors->first('area') }}</span>
        @endif
        <br/>
        <select name="area">
            <option value="0">選択</option>
            <option value="北海道">北海道</option>
            <option value="青森">青森</option>
            <option value="岩手">岩手</option>
            <option value="宮城">宮城</option>
            <option value="秋田">秋田</option>
            <option value="山形">山形</option>
            <option value="福島">福島</option>
            <option value="茨城">茨城</option>
            <option value="群馬">群馬</option>
            <option vlaue="埼玉">埼玉</option>
            <option value="千葉">千葉</option>
            <option value="東京">東京</option>
            <option value="神奈川">神奈川</option>
            <option value="新潟">新潟</option>
            <option value="富山">富山</option>
            <option value="石川">石川</option>
            <option value="福井">福井</option>
            <option value="山梨">山梨</option>
            <option value="長野">長野</option>
            <option value="岐阜">岐阜</option>
            <option value="静岡">静岡</option>
            <option value="愛知">愛知</option>
            <option value="三重">三重</option>
            <option value="滋賀">滋賀</option>
            <option value="京都">京都</option>
            <option value="大阪">大阪</option>
            <option value="兵庫">兵庫</option>
            <option value="奈良">奈良</option>
            <option value="和歌山">和歌山</option>
            <option value="鳥取">鳥取</option>
            <option value="島根">島根</option>
            <option value="岡山">岡山</option>
            <option value="広島">広島</option>
            <option value="山口">山口</option>
            <option value="徳島">徳島</option>
            <option value="香川">香川</option>
            <option value="愛媛">愛媛</option>
            <option value="高知">高知</option>
            <option value="福岡">福岡</option>
            <option value="佐賀">佐賀</option>
            <option value="長崎">長崎</option>
            <option value="熊本">熊本</option>
            <option value="大分">大分</option>
            <option value="宮崎">宮崎</option>
            <option value="鹿児島">鹿児島</option>
            <option value="沖縄">沖縄</option>
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
