<?php

use Faker\Generator as Faker;

$factory->define(\App\Tag::class, function (Faker $faker) {
    return [
        'title' => $faker ->sentence(2),
        'message' => $faker->paragraph(2),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime()
    ];
});
