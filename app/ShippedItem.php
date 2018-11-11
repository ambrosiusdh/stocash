<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippedItem extends Model
{
    public function item(){
        return $this->belongsTo('\App\Item');
    }

    public function transaction(){
        return $this->belongsTo('\App\Transaction');
    }
}
