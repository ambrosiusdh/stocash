<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use function redirect;
use function session;
use function view;

class UserController extends Controller
{
    public function getLogin(){
        return view('user.login');
    }

    public function getIndex(){
        if (session()->get('id') == 1) {
            return view('user.index');
        }else{
            if(session()->has('id')){
                return redirect('/cashier');
            }
            return redirect('/login');
        }

    }

    public function login(Request $request){
        if(!$request->has('data')){
            redirect()->back();
        }
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();
        if($user == null || $user->password != $request->password){
            return redirect()->back()->with('error', 'Email atau password salah');
        }

        $request->session()->put(['id' => $user->id]);
        $request->session()->put(['name' => $user->name]);
        if($user->roleId == 1) {
            return redirect('/');
        }else{
            return redirect('/cashier');
        }
    }

    public function logout(Request $request){
        if(!$request->has('data')){
            redirect()->back();
        }

        session()->flush();
        return redirect('/login');
    }
}
