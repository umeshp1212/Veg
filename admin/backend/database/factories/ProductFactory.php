<?php

use Faker\Generator as Faker;
use App\Category;

$factory->define(App\Product::class, function (Faker $faker) {
    return [

        'category_id' => function(){
            return Category::all()->random();
        },
       
        'name' =>$faker->name,
        'price' => $faker->randomDigit,
        'unit' => "gm"
    ];
});
