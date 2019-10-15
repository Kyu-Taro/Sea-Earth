<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateRequest;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Text;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\SettingRequest;
use App\Http\Requests\PassRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $text = Text::where('shop_id',$id)->get();

        $data = [
            'user' => $user,
            'texts' => $text,
        ];

        return view('main.shopDetail',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,SettingRequest $validate)
    {
            $form = $request->all();
            unset($form['_token']);
            $user = User::find($id);

            if (!$request->file('img') == null) {
                $path = Storage::disk('s3')->putFile('seaearth', $request->file('img'), 'public');
                $form['img'] = Storage::disk('s3')->url($path);
                $user->fill($form)->save();
            }else{
                $user->name = $request->input('name');
                $user->area = $request->input('area');
                $user->url = $request->input('url');
                $user->url2 = $request->input('url2');
                $user->prof = $request->input('prof');
                $user->email = $request->input('email');
                $user->save();
            }

            session()->flash('fls_msg','プロフィール変更完了しました');

            return redirect()->route('mypage');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
