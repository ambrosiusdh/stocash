<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function view;

class CashierController extends Controller
{
    //
    public function getLogin(){
        return view('cashier.login');
    }

    public function getIndex(){
        return view('cashier.index');
    }
}
