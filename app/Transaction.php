<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{

    public function shippedItems(){
        return $this->hasMany('\App\ShippedItem');
    }

    public function transactionHeader(){
        return $this->belongsTo('\App\TransactionHeader');
    }

    public function user(){
        return $this->hasManyThrough('\App\User','\App\TransactionHeader','userId', 'id');
    }

    public function items(){
        return $this->hasManyThrough('\App\Item', '\App\ShippedItem', 'itemId', 'id');
    }
}
