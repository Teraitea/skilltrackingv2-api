<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Formation;
use Faker\Generator as Faker;

$factory->define(Formation::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'start_at' => $faker->datetime(),
        'end_at' => $faker->datetime(),
        'logo' => $faker->url(),
    ];
});
