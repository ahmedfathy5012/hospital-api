<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Outpatient_clinic;
use Faker\Generator as Faker;

$factory->define(Outpatient_clinic::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'number'=>$faker->unique()->numberBetween(1,7),
        'phone'=>$faker->unique()->phoneNumber,
        'specialization_id'=>$faker->numberBetween(1,10),
    ];
});
