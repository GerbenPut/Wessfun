<?php

use Faker\Generator as Faker;

$factory->define(App\Merch::class, function (Faker $faker) {
    return [
        'name' => $faker ->sentence(2),
        'price' => $faker->sentence(2),
        'size' => $faker->paragraph(1),
        'url' => $faker->url,
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime()
    ];
});
