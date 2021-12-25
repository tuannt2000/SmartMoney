<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget_Category extends Model
{
    use HasFactory;

    protected $table = "budgets_categories";

    public function budget(){
        return $this->belongsTo('App\Models\Budget');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}
