<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Patient;
use Faker\Generator as Faker;

$factory->define(Patient::class, function (Faker $faker) {
    return [
        'date_of_file' => now(),
        'first_name' =>$faker->firstName,
        'second_name'=>$faker->firstName,
        'third_name'=>$faker->lastName,
        'nationality_id'=>$faker->numberBetween(1,5),
        'address'=>$faker->address,
        'date-of-birth'=>$faker->date(),
        'phone'=>$faker->phoneNumber,
        'email'=>$faker->email,
        'social_status'=>$faker->randomElement(['Married','Celibate']),
        'job'=>$faker->randomElement(['Married','Celibate']),
        'sex_id' => $faker->numberBetween(1,3),
        'blood_id' =>$faker->numberBetween(1,8),
        'notes'=>$faker->text(200),
        'image'=>$faker->imageUrl(),
        'user_id'=>$faker->unique()->numberBetween(401,1000),
    ];
});
