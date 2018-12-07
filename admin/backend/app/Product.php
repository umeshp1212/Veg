<?php

namespace App;


use App\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'category_id',
        'price',
        'unit'
    ];

    public function category(){
        $this->belongsTo(Category::class);
    }
}
