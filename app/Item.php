<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function itemType(){
        return $this->hasOne('\App\ItemType');
    }

    public function shippedItem(){
        return $this->hasMany('\App\ShippedItem');
    }
}
