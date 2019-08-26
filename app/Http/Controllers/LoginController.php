<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    //ログイン処理
    public function login(Request $request,LoginRequest $validate)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $value = $request->input('check');

        $remember = 60 * 60 * 24 * 30;
        if($value == '1'){
            if(Auth::attempt(['email' => $email,'password' => $password],$remember)){
                return  redirect()->route('mypage');
            }else{
                return back()->with('error','※メールアドレス又はパスワードが違います');
            }
        }else{
            if(Auth::attempt(['email' => $email,'password' => $password])){
                return redirect()->route('mypage');
            }else{
                return back()->with('error','※メールアドレス又はパスワードが違います');
            }
        }

    }
}
