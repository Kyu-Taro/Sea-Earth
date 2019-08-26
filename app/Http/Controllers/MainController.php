<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{

    //メインページアクション
    public function index()
    {
        return view('main.index');
    }

    //マイページアクション
    public function mypage()
    {
        return view('main.mypage');
    }

    //ログアウトアクション
    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}
