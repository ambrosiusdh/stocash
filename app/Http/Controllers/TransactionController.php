<?php

namespace App\Http\Controllers;

use App\Item;
use App\ShippedItem;
use App\Transaction;
use App\TransactionHeader;
use function array_push;
use function compact;
use Illuminate\Http\Request;
use function redirect;
use function response;
use function session;

class TransactionController extends Controller
{
    public function getTransaction(){
        if (session()->get('id') == 1) {
        }else{
            if(session()->has('id')){
                return redirect('/cashier');
            }
            return redirect('/login');
        }
        $transactions = Transaction::orderBy('created_at', 'DESC')->get();
        return view('user.transaction', compact('transactions'));
    }

    public function getTransactionDetail(Request $request){
        if(!$request->has('data')){
            redirect()->back();
        }
        $transaction = Transaction::find($request->id);
        $shippedItems = ShippedItem::where('transactionId', $request->id)->get();
        $items = [];
        $amounts = [];
        foreach ($shippedItems as $shippedItem){
            $item = Item::where('id', $shippedItem->itemId)->get();
            array_push($items, $item);
            $amount = $shippedItem->amount;
            array_push($amounts, $amount);
        }

        return response()->json(array('transaction'=> $transaction, 'item' => $items, 'amount' => $amounts ,'count' => $shippedItems->count()),200);
    }

    public function insertTransactionData(Request $request){
        if(!$request->has('data')){
            redirect()->back();
        }
        $transactionHeaderId = TransactionHeader::count();
        $transactionId = Transaction::count();
        $transactionHeaderId++;
        $transactionId++;

        $transactionHeader = new TransactionHeader();
        $transaction = new Transaction();

        $transaction->transactionHeaderId = $transactionHeaderId;
        $transaction->totalPrice = $request->totalPrice;

        $transactionHeader->transactionId = $transactionId;
        $transactionHeader->userId = session()->get('id');

        $transaction->save();
        $transactionHeader->save();

        return response()->json(array('transactionId' => $transactionId));
    }
}
