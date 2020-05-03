<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function category() {
        $this->belongsTo(TransactionCategory::class);
    }

    public function tags() {
        $this->belongsToMany(Tag::class);
    }
}
