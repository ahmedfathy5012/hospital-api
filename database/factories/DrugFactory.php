<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Drug;
use Faker\Generator as Faker;

$factory->define(Drug::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'count'=>$faker->numberBetween(5,100),
        'production_date'=>$faker->date(),
        'expiry_date'=>$faker->date(),
        'how_to_use'=>$faker->text(200),
    ];
});
