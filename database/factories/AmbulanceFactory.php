<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ambulance;
use Faker\Generator as Faker;

$factory->define(Ambulance::class, function (Faker $faker) {
    return [
        'driver_id'=>$faker->numberBetween(1,10),
        'paramedic_id'=>$faker->numberBetween(11,20),
        'car_number'=>$faker->creditCardNumber
    ];
});
