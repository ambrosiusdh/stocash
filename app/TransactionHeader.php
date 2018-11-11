<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionHeader extends Model
{
    public function transaction(){
        return $this->hasOne('\App\Transaction');
    }

    public function user(){
        return $this->belongsTo('\App\User');
    }
}
