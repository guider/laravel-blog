<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{


    public function __construct()
    {
        $this->middleware('guest', [
            'only' => ['create']
        ]);

    }

    public function create()
    {
        return view('sessions.create');
    }


    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'

        ]);


        if (Auth::attempt($credentials, $request->has('remember'))) {
            if (Auth::user()->activated) {
                session()->flash('success', '登录成功');
                $fallback = route('users.show', [Auth::user()]);

                return redirect()->intended($fallback);
            } else {
                Auth::logout();
                session()->flash('warning', '账号未激活');

                return redirect('/');
            }
        } else {

            session()->flash('danger', '用户名密码不匹配');
            return redirect()->back()->withInput();

        }

    }


    public function destroy()
    {
        Auth::logout();
        session()->flash('success', '您已退出登录');
        return redirect('login');
    }

}
