<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Category extends Model
{
    protected $fillable = ['name'];

    public function user(){
        return $this->belognsTo(User::class);
    }
}
