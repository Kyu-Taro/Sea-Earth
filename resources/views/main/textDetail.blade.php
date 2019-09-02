@extends('template.textDetailParent')
@section('href','/css/textDetail.css')
@section('title','Sea&Earth|画像詳細')

@section('header')
    @component('components.header')
    @slot('link1')
        /sea-earth_laravel/public/
    @endslot
    @slot('nav1')
        Top
    @endslot
    @slot('link2')
        /sea-earth_laravel/public/create
    @endslot
    @slot('nav2')
        Create
    @endslot
    @slot('link3')
        /sea-earth_laravel/public/text
    @endslot
    @slot('nav3')
        Photos
    @endslot
    @slot('link4')
        /sea-earth_laravel/public/setting
    @endslot
    @slot('nav4')
        Setting
    @endslot
    @endcomponent
@endsection

@section('top-title','画像詳細')
@section('content')
    <div class="text">
        <img src="{{ $text->img }}"><br/>
        <div class="text-area-container">
            <div class="text-area">ショップ名: <a href="/user/{{ $text->user->id }}">{{ $text->user->name }}</a><br/></div>
            <div class="text-area">エリア: {{ $text->user->area }}<br/></div>
            <div class="text-area">URL: <a href="{{ $text->user->url }}">ショップはこちら</a><br/></div>
            <div class="text-area">{{ $text->text }}</div>
        </div>
    </div>
@endsection

@section('footer')
    @component('components.footer')
    @slot('link1')
        /sea-earth_laravel/public/
    @endslot
    @slot('nav1')
        Top
    @endslot
    @slot('link2')
        /sea-earth_laravel/public/create
    @endslot
    @slot('nav2')
        Create
    @endslot
    @slot('link3')
        /sea-earth_laravel/public/text
    @endslot
    @slot('nav3')
        Photos
    @endslot
    @slot('link4')
        /sea-earth_laravel/public/setting
    @endslot
    @slot('nav4')
        Setting
    @endslot
    @endcomponent
@endsection
