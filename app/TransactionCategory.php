<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionCategory extends Model
{
    public function transactions() {
        $this->hasMany(Transaction::class);
    }
}
