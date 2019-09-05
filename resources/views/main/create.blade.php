@extends('template.form')
@section('href','css/create.css')
@section('title','Sea&Earth|写真投稿')
<i class="fas fa-bars"></i>
<i class="fas fa-undo"></i>
<div class="menu">
    <span class="comment">Menu</span>
    <ul class="menu-ul">
        <li><a href="/">Top</a></li>
        <li><a href="setting">Setting</a></li>
        <li><a href="text">Photos</a></li>
        <li><a href="mypage">Mypage</a></li>
    </ul>
</div>

@section('header')
    @component('components.header')
    @slot('link1')
        login
    @endslot
    @slot('nav1')
        Login
    @endslot
    @slot('link2')
        register
    @endslot
    @slot('nav2')
        Register
    @endslot
    @slot('link3')
        text
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

@section('top-title','写真投稿')
@section('form')
    <form action="text" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{ $user->id }}" name="shop_id">
        @if ($errors->has('img'))
            <span class="error">{{ $errors->first('img') }}</span>
        @endif
        <div class="area-drop">
            写真を選択
            <img src="" class="prev-img" style="display: none">
            <input type="file" name="img" class="input-file"><br/>
        </div>
        タイトル
        @if ($errors->has('title'))
            <span class="error">{{ $errors->first('title') }}</span>
        @endif<br/>
        <input type="text" name="title" value="{{ old('title') }}">
        撮影エリア
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
        撮影エリア詳細
        @if ($errors->has('area2'))
            <span class="error">{{ $errors->first('area2') }}</span>
        @endif<br/>
        <input type="text" name="area2" value="{{ old('area2') }}"><br/>
        撮影季節
        @if ($errors->has('season'))
            <span class="error">{{ $errors->first('season') }}</span>
        @endif<br/>
        <select name="season">
            <option value="0">選択</option>
            <option value="春">春</option>
            <option value="夏">夏</option>
            <option value="秋">秋</option>
            <option value="冬">冬</option>
        </select><br/>
        写真情報
        @if ($errors->has('text'))
            <span class="error">{{ $errors->first('text') }}</span>
        @endif
        <br>
        <textarea name="text" cols="50" rows="10">{{ old('text') }}</textarea>
        <input type="submit" value="投稿">
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
        setting
    @endslot
    @slot('nav2')
        Setting
    @endslot
    @slot('link3')
        text
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

