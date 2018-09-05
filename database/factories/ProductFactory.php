<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    $name = $faker->name;
    return [
        'name' => $name,
        'slug' => str_slug($name),
        'description' => $faker->text,
        'details' => $faker->text(100),
        'price' => $faker->randomNumber(2),
    ];
});
