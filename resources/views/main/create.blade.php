@extends('template.form')
@section('href','css/create.css')
@section('title','Sea&Earth|写真投稿')

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
        写真情報
        @if ($errors->has('text'))
            <span class="error">{{ $errors->first('text') }}</span>
        @endif
        <br>
        <textarea name="text" cols="50" rows="10"></textarea>
        <input type="submit" value="投稿">
    </form>
@endsection

@section('footer')
    @component('components.footer')
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

