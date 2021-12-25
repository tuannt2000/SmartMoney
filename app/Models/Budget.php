<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;

    protected $table = "budgets";

    public function budget_category(){
        return $this->hasMany('App\Models\Budget_Category');
    }
}
