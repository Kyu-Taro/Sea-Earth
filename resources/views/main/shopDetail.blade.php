@extends('template.mypageParent')
@section('title','Sea&Earth|ショップ詳細')
@section('href','/sea-earth_laravel/public/css/shopDetail.css')

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
        /sea-earth_laravel/public/mypage
    @endslot
    @slot('nav4')
        Mypage
    @endslot
    @endcomponent
@endsection

@section('top-title','ショップ情報')
@section('prof')
    <img src="@if(empty($user->img)) /sea-earth_laravel/public/img/sample.jpg @else {{ $user->img }} @endif">
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
                    <a href="text/{{ $text->id }}"><img src="{{ $text->img }}"></a><br/>
                </div>
                <span class="bold">ショップ名:</span> {{ $text->user->name }}<br/>
                <span class="bold">エリア:</span> {{ $text->user->area }}<br/>
                <span class="bold">URL:</span> <a href="{{ $text->user->url }}">ショップはこちら</a><br/>
                <div class="text-area">
                    {{ $text->text }}
                </div>
            </div>
        @endforeach
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
        /sea-earth_laravel/public/mypage
    @endslot
    @slot('nav4')
        Mypage
    @endslot
    @endcomponent
@endsection
