@extends('template.form')
@section('href','css/login.css')
@section('title','Sea&Earth|パスワード変更')

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
            mypage
        @endslot
        @slot('nav3')
            Mypage
        @endslot
        @slot('link4')
            setting
        @endslot
        @slot('nav4')
            Setting
        @endslot
    @endcomponent
@endsection

@section('top-title','パスワード変更')
@section('form')
    @if (session('error'))
        <span class="error">{{ session('error') }}</span>
    @endif
    <form action="pass_re" method="POST">
        @csrf
        古いパスワード
        @if ($errors->has('pass'))
            <span class="error">{{ $errors->first('pass') }}</span>
        @endif
        <br/>
        <input type="password" name="pass"><br/>
        新しいパスワード
        @if ($errors->has('new_pass'))
            <span class="error">{{ $errors->first('new_pass') }}</span>
        @endif
        <br/>
        <input type="password" name="new_pass"><br/>
        再入力
        @if ($errors->has('new_pass_confirmation'))
            <span class="error">{{ $errors->first('new_pass_confirmation') }}</span>
        @endif
        <br/>
        <input type="password" name="new_pass_confirmation"><br/>
        <input type="submit" value="変更">
    </form>
@endsection

@section('footer')
    @component('components.footer')
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
