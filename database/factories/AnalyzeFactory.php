<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Analyze;
use Faker\Generator as Faker;

$factory->define(Analyze::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
    ];
});
