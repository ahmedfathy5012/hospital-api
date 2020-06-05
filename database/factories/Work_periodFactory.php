<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Work_period;
use Faker\Generator as Faker;

$factory->define(Work_period::class, function (Faker $faker) {
    return [
        'doctor_id'=>$faker->numberBetween(1,20),
        'time_attendance'=>$faker->time(),
        'time_leave'=>$faker->time(),
        'day_id'=>$faker->numberBetween(1,7),
    ];
});
