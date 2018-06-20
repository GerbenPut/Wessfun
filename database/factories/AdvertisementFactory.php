<?php

use Faker\Generator as Faker;

$factory->define(App\Advertisement::class, function (Faker $faker) {
    return [
        'company' => $faker ->sentence(2),
        'URL' => $faker->sentence(2),
//        'image_id' => $faker->sentence(2),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime()
    ];
});