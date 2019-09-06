@extends('template.textParent')
@section('href','css/texts.css')
@section('title','Sea&Earth|写真一覧')

@section('header')
    @component('components.header')
    @slot('link1')
        ./
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
        setting
    @endslot
    @slot('nav3')
        Setting
    @endslot
    @slot('link4')
        mypage
    @endslot
    @slot('nav4')
        Mypage
    @endslot
    @endcomponent
@endsection

@section('form')
    <form action="text" method="GET">
        @csrf
        <input type="word" placeholder="例)サンゴ" name="text">
        <select name="area">
            <option value="0">エリア選択</option>
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
        </select>
        <select name="season">
                <option value="0">季節選択</option>
                <option value="春">春</option>
                <option value="夏">夏</option>
                <option value="秋">秋</option>
                <option value="冬">冬</option>
        </select>
        <input type="submit" value="検索">
    </form>
@endsection

@section('top-title','写真一覧')
@section('texts')
    @foreach ($texts as $text)
        <div class="text">
            <div class="image">
                <a href="/text/{{ $text->id }}"><img src="{{ $text->img }}"></a><br/>
            </div>
            タイトル: {{ $text->title }}<br/>
            ショップ名: <a href="user/{{ $text->user->id }}">{{ $text->user->name }}</a><br/>
            撮影エリア: {{ $text->area }}<br/>
            エリア詳細: {{ $text->area2 }}<br/>
            季節: {{ $text->season }}<br/>
            URL: <a href="{{ $text->user->url }}">ショップはちら</a><br/>
            <div class="text-area">
                {{ $text->text }}
            </div>
        </div>
    @endforeach
@endsection

@section('footer')
    @component('components.footer')
    @slot('link1')
        ./
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
        setting
    @endslot
    @slot('nav3')
        Setting
    @endslot
    @slot('link4')
        mypage
    @endslot
    @slot('nav4')
        Mypage
    @endslot
    @endcomponent
@endsection
