<?php

use Faker\Generator as Faker;

$factory->define(image::class, function (Faker $faker) {
    return [
        'titel' => $faker ->sentence(2),
        'description' => $faker->paragraph(10),
        'category' => $faker->string(15),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime()
    ];
});

