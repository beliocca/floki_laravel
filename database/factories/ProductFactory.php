<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => 'Title product',
        'price' => $faker->numberBetween(500, 9000),
        'description' => $faker->paragraph(10),
        'stock' => $faker->numberBetween(1, 500)
    ];
});
