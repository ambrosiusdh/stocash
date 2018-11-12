<?php

namespace App\Http\Controllers;

use App\ShippedItem;
use Illuminate\Http\Request;
use App\Item;
use function compact;
use function redirect;
use function view;

class ItemController extends Controller
{

    public function getInventory(){
        if (session()->get('id') == 1) {
        }else{
            if(session()->has('id')){
                return redirect('/cashier');
            }
            return redirect('/login');
        }
        $item = Item::orderBy('stock', 'asc')->get();
        return view('user.inventory',compact('item'));
    }

    public function getCashier(){
        if(!session()->has('id')){
            return redirect('/login');
        }

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

    public function insertShippedItemData(Request $request){
        if(!$request->has('data')){
            redirect()->back();
        }

        $shippedItem = new ShippedItem();
        $shippedItem->itemId = $request->itemId;
        $shippedItem->transactionId = $request->transactionId;
        $shippedItem->amount = $request->amount;
        $shippedItem->save();

        $item = Item::where('id', $request->itemId)->get();
        foreach ($item as $data) {
            $data->goodsSold += $request->amount;
            $data->save();
        }

        return $shippedItem;
    }

    public function getReport(){
        if (session()->get('id') == 1) {
        }else{
            if(session()->has('id')){
                return redirect('/cashier');
            }
            return redirect('/login');
        }
        $items = Item::orderBy('goodsSold', 'desc')->get();
        return view('user.report', compact('items'));
    }

}
