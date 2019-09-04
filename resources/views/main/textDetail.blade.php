@extends('template.textDetailParent')
@section('href','/css/textDetail.css')
@section('title','Sea&Earth|画像詳細')

<i class="fas fa-bars"></i>
<i class="fas fa-undo"></i>
<div class="menu">
    <span class="comment">Menu</span>
    <ul class="menu-ul">
        <li><a href="/">Top</a></li>
        <li><a href="/create">Create</a></li>
        <li><a href="/text">Photos</a></li>
        <li><a href="/mypage">Mypage</a></li>
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
        /create
    @endslot
    @slot('nav2')
        Create
    @endslot
    @slot('link3')
        /text
    @endslot
    @slot('nav3')
        Photos
    @endslot
    @slot('link4')
        /mypage
    @endslot
    @slot('nav4')
        Mypage
    @endslot
    @endcomponent
@endsection

@section('top-title','画像詳細')
@section('content')
    <div class="text">
        <div class="img">
            <img src="{{ $text->img }}"><br/>
        </div>
        <div class="text-area-container">
            <div class="text-area">ショップ名: <a href="/user/{{ $text->user->id }}">{{ $text->user->name }}</a><br/></div>
            <div class="text-area">エリア: {{ $text->user->area }}<br/></div>
            <div class="text-area">エリア詳細: {{ $text->area2 }}<br/></div>
            <div class="text-area">季節:</span>{{ $text->season }}<br/></div>
            <div class="text-area">URL: <a href="{{ $text->user->url }}">ショップはこちら</a><br/></div>
            <div class="text-area">{{ $text->text }}</div>
        </div>
    </div>
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
        /create
    @endslot
    @slot('nav2')
        Create
    @endslot
    @slot('link3')
        /text
    @endslot
    @slot('nav3')
        Photos
    @endslot
    @slot('link4')
        /mypage
    @endslot
    @slot('nav4')
        Mypage
    @endslot
    @endcomponent
@endsection
