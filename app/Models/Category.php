<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'icon',
        'type',
        'color',
        'create_by'
    ];

    public function storeCategory($data)
    {
        $category = $this->create($data);

        return $category;
    }

    // Update category
    public function updateCategory($data, $category) : bool
    {
        return $category->update($data);
    }

    protected $table = "categories";

    public function transaction(){
        return $this->hasMany('App\Models\Transaction');
    }

    public function budget_category(){
        return $this->hasMany('App\Models\Budget_Category');
    }
}
