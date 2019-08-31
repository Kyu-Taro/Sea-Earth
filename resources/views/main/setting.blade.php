@extends('template.form')
@section('href','css/register.css')
@section('title','Sea&Earth|プロフィール変更')

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

@section('top-title','プロフィール変更')
@section('form')
    <form action="user/{{ $user->id }} " method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @if ($errors->has('img'))
            <span class="error">{{ $errors->first('img') }}</span>
        @endif
        <div class="area-drop">
            写真を選択
            <img src="@if(!empty($user->img)) {{ $user->img }} @endif" class="prev-img" style="@if(!empty($user->img)) display: block @else display: none @endif">
            <input type="file" name="img" class="input-file"><br/>
        </div>
        名前
        @if ($errors->has('name'))
            <span class="error">{{ $errors->first('name') }}</span>
        @endif
        <br>
        <input type="text" name="name" value="{{ $user->name }}"><br/>
        メールアドレス
        @if ($errors->has('email'))
            <span class="error">{{ $errors->first('email') }}</span>
        @endif
        <br/>
        <input type="text" name="email" value="{{ $user->email }}"><br/>
        エリア
        @if ($errors->has('area'))
            <span class="error">{{ $errors->first('area') }}</span>
        @endif
        <br/>
        <input type="text" name="area" value="{{ $user->area }}"><br/>
        URL
        @if ($errors->has('url'))
            <span class="error">{{ $errors->first('url') }}</span>
        @endif
        <br/>
        <input type="text" name="url" value="{{ $user->url }}"><br/>
        ショップ情報
        @if ($errors->has('prof'))
            <span class="error">{{ $errors->first('prof') }}</span>
        @endif
        <br/>
        <textarea name="prof" cols="30" rows="10">{{ $user->prof }}</textarea><br/>
        <a href="pass_re">パスワード変更はこちら</a>
        <input type="submit" value="更新">
    </form>
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
