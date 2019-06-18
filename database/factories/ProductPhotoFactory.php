<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\ProductPhoto;
use Faker\Generator as Faker;

$factory->define(ProductPhoto::class, function (Faker $faker) {
    return [
      'filename' => 'image-test.jpg',
      'product_id' => $faker->unique()->numberBetween(1, 60)
    ];
});
