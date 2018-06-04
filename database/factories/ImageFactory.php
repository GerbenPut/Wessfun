<?php

use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'title' => $faker ->sentence(2),
        'description' => $faker->paragraph(10),
        'category' => $faker->paragraph(10),
        'url' => $faker->url,
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime()
    ];
});
