<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Booking_date;
use Faker\Generator as Faker;

$factory->define(Booking_date::class, function (Faker $faker) {
    return [
        'appointment_time'=>$faker->time(),
        'appointment_date'=>$faker->date(),
        'patient_id'=>$faker->numberBetween(1,600),
    ];
});
