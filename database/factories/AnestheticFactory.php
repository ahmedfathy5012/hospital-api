<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Anesthetic;
use Faker\Generator as Faker;

$factory->define(Anesthetic::class, function (Faker $faker) {
    return [
        'name'=>$faker->word
    ];
});
