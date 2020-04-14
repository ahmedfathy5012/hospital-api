<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blood;
use Faker\Generator as Faker;

$factory->define(Blood::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElement(
            [
                'A+',
                'B+',
                'AB+',
                'A-',
                'B-',
                'AB-',
                'O+',
                'O-'
            ]
        )
    ];
});
