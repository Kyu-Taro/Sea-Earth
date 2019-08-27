<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Text;

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
        $user = Auth::user();
        $texts = Text::where('shop_id',$user->id)->get();

        $param = [
            'user' => $user,
            'texts' => $texts,
        ];

        return view('main.mypage',$param);
    }

    //ログアウトアクション
    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }

    //投稿アクション
    public function create(Request $request)
    {
        $user = Auth::user();
        return view('main.create',compact('user'));
    }
}
