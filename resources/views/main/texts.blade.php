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

@section('top-title','写真一覧')
@section('texts')
    @foreach ($texts as $text)
        <div class="text">
            <div class="image">
                <a href="/text/{{ $text->id }}"><img src="{{ $text->img }}"></a><br/>
            </div>
            ショップ名:<br/><a href="user/{{ $text->user->id }}">{{ $text->user->name }}</a><br/>
            エリア:　{{ $text->user->area }}<br/>
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
