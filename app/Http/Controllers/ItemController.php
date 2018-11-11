<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use function compact;
use function redirect;
use function view;

class ItemController extends Controller
{
    public function getInventory(){
        $item = Item::orderBy('stock', 'asc')->get();
        return view('user.inventory',compact('item'));
    }

    public function getCashier(){
        $item = Item::all()->where('stock', '>=', 1);
        return view('user.cashier', compact('item'));
    }

    public function editStock(Request $request){
        if($request->has('stock')){
            $item = Item::find($request->id);
            if(!$item){
                return view('errors.404');
            }
            $item->stock = $request->stock;
            $item->save();
            return redirect()->back();
        }else{
            return view('errors.404');
        }
    }


}
