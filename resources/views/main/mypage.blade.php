@extends('template.mypageParent')
@section('title','マイページ')
@section('href','css/mypage.css')

@if (session('fls_msg'))
    <p class="fls_msg">{{ session('fls_msg') }}</p>
@endif
<i class="fas fa-bars"></i>
<i class="fas fa-undo"></i>
<div class="menu">
    <span class="comment">Menu</span>
    <ul class="menu-ul">
        <li><a href="logout">Logout</a></li>
        <li><a href="create">Create</a></li>
        <li><a href="text">Photos</a></li>
        <li><a href="setting">Setting</a></li>
    </ul>
</div>

@section('header')
    @component('components.header')
    @slot('link1')
        logout
    @endslot
    @slot('nav1')
        Logout
    @endslot
    @slot('link2')
        create
    @endslot
    @slot('nav2')
        Create
    @endslot
    @slot('link3')
        text
    @endslot
    @slot('nav3')
        Photos
    @endslot
    @slot('link4')
        setting
    @endslot
    @slot('nav4')
        Setting
    @endslot
    @endcomponent
@endsection

@section('top-title','マイページ')
@section('prof')
    <img src="@if(empty($user->img)) img/sample.jpg @else {{ $user->img }} @endif">
    <dl class="res">
        <dt>ショップ名</dt>
        <dd>{{ $user->name }}</dd>
        <dt>メールアドレス</dt>
        <dd>{{ $user->email }}</dd>
        <dt>ショップエリア</dt>
        <dd>{{ $user->area }}</dd>
        <dt>url</dt>
        <dd>{{ $user->url }}</dd>
        <dt>ショップ情報</dt>
        <dd>{{ $user->prof }}</dd>
    </dl>
    <h2 class="on">ショップ名</h2>
    <ul class="on">
        <li>{{ $user->name }}</li>
    </ul>
    <dl class="on">
        <dt>メールアドレス</dt>
        <dd>{{ $user->email }}</dd>
        <dt>エリア</dt>
        <dd>{{ $user->area }}</dd>
        <dt>URL</dt>
        <dd>{{ $user->url }}</dd>
        <dt>ショップ情報</dt>
        <dd>{{ $user->prof }}</dd>
    </dl>
@endsection

@section('text-title','投稿一覧')
@section('text')
    <div class="scroll">
        @foreach ($texts as $text)
            <div class="texts">
                <div class="image">
                    <a href="text/{{ $text->id }}"><img src="{{ $text->img }}"></a><br/>
                </div>
                <span class="bold">ショップ名:</span> {{ $text->user->name }}<br/>
                <span class="bold">エリア:</span> {{ $text->user->area }}<br/>
                <span class="bold">エリア詳細:</span>{{ $text->area2 }}<br/>
                <span class="bold">季節:</span>{{ $text->season }}<br/>
                <span class="bold">URL:</span> <a href="{{ $text->user->url }}">ショップはこちら</a><br/>
                <div class="text-area">
                    {{ $text->text }}
                </div>
                <a href="text/{{ $text->id }}/edit" class="delete">削除</a>
            </div>
        @endforeach
    </div>
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
        create
    @endslot
    @slot('nav2')
        Create
    @endslot
    @slot('link3')
        text
    @endslot
    @slot('nav3')
        Photos
    @endslot
    @slot('link4')
        setting
    @endslot
    @slot('nav4')
        Setting
    @endslot
    @endcomponent
@endsection
