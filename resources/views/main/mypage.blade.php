@extends('template.mypageParent')
@section('title','マイページ')
@section('href','css/mypage.css')

@section('header')
    @component('components.header')
    @slot('link1')
        index
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
        photos
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
    <dl>
        <dt>ショップ名</dt>
        <dd>{{ $user->name }}</dd>
        <dt>メールアドレス</dt>
        <dd>{{ $user->email }}</dd>
        <dt>area</dt>
        <dd>{{ $user->area }}</dd>
        <dt>url</dt>
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
                    <img src="{{ $text->img }}"><br/>
                </div>
                ショップ名:{{ $text->user->name }}<br/>
                エリア:{{ $text->user->area }}<br/>
                URL:{{ $text->user->url }}<br/>
                {{ $text->text }}
            </div>
        @endforeach
    </div>
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
        create
    @endslot
    @slot('nav2')
        Create
    @endslot
    @slot('link3')
        photos
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
