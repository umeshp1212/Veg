<?php

namespace App;

use App\Product;
use App\User;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    protected $fillable = ['name'];

    public function user(){
        return $this->belognsTo(User::class);
    }
    public function products(){
        return $this->hasMany(Product::class);
    }
}
