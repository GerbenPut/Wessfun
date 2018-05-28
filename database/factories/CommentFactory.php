<?php

use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'title' => $faker ->sentence(2),
        'message' => $faker->paragraph(10),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime()
    ];
});
