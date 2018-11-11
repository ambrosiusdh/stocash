<?php

namespace App\Http\Controllers;

use App\User;
use function compact;
use Illuminate\Http\Request;
use function redirect;
use function view;

class UserController extends Controller
{
    public function getLogin(){
        return view('user.login');
    }

    public function getIndex(){
        return view('user.index');
    }

    public function getReport(){
        return view('user.report');
    }

    public function getTransaction(){
        return view('user.transaction');
    }

    public function checkSession(Request $request){
        if (!$request->session()->has('email')) {
            return redirect('/login');
        }else{
            return $this->getIndex();
        }
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();
        if($user == null){
            return redirect()->back()->with('error', 'Email atau password salah');
        }

        $request->session()->put(['email' => $request->email]);
        $this->checkSession($request);
    }
}
