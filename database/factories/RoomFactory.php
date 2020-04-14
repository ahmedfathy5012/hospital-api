<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Room;
use Faker\Generator as Faker;

$factory->define(Room::class, function (Faker $faker) {
    return [
        'room_number'=>$faker->unique()->numberBetween(1,300),
        'bed_count'=>$faker->numberBetween(1,3),
    ];
});
