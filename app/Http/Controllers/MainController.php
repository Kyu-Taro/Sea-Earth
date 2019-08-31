<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Text;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\PassRequest;

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
        session()->flash('fls_msg','ログアウトしました');
        return redirect()->route('index');
    }

    //投稿アクション
    public function create(Request $request)
    {
        $user = Auth::user();
        return view('main.create',compact('user'));
    }

    //settingアクション
    public function setting()
    {
        $user = Auth::user();
        return view('main.setting',compact('user'));
    }

    //パスワード変更画面アクション
    public function pass()
    {
        $user = Auth::user();
        return view('main.pass_re',compact('user'));
    }

    //パス変更アクション
    public function pass_re(Request $request,PassRequest $validata)
    {
        $user = Auth::user();
        $pass = $request->input('pass');

        if(Hash::check($pass,$user->password)){
            $newPass = $request->input('new_pass');
            $user->password = Hash::make($newPass);
            $user->save();
            session()->flash('fls_msg','パスワード変更しました');
            return redirect()->route('mypage');
        }else{
            return back()->with('error','※登録パスワードと一致しません');
        }
    }
}
