<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'category' => $faker ->sentence(2),
        'description' => $faker->sentence(2),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime()
    ];
});
