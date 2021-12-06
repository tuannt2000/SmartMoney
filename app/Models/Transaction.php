<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = "transactions";

    public function wallet(){
        return $this->belongsTo('App\Models\Wallet');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}
