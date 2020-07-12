<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Skill;
use Faker\Generator as Faker;

$factory->define(Skill::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'is_mandatory' => $faker->boolean(),
        'module_id' => 2
    ];
    
});
