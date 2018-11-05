<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function view;

class OwnerController extends Controller
{
    //
    public function getLogin(){
        return view('owner.login');
    }

    public function getIndex(){
        return view('owner.index');
    }

    public function getReport(){
        return view('owner.report');
    }

    public function getInventory(){
        return view('owner.inventory');
    }

    public function getTransaction(){
        return view('owner.transaction');
    }
}
