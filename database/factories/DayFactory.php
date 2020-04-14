<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Day;
use Faker\Generator as Faker;

$factory->define(Day::class, function (Faker $faker) {
    return [
        'day'=>$faker->unique()->randomElement([
            'Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'
        ]),
    ];
});
