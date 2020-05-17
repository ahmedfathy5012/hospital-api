<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Nurse;
use Faker\Generator as Faker;

$factory->define(Nurse::class, function (Faker $faker) {
    return [
        'date_of_hiring' => now(),
        'first_name' =>$faker->firstName,
        'second_name'=>$faker->firstName,
        'third_name'=>$faker->lastName,
        'nationality_id'=>$faker->numberBetween(1,5),
        'address'=>$faker->address,
        'date_of_birth'=>$faker->date(),
        'phone'=>$faker->phoneNumber,
        'email'=>$faker->email,
        'social_status'=>$faker->randomElement(['Married','Celibate']),
        'job_id'=>$faker->numberBetween(3,6),
        'sex_id' => $faker->numberBetween(1,3),
        'blood_id' =>$faker->numberBetween(1,8),
        'notes'=>$faker->text(200),
        'image'=>$faker->imageUrl(),
        'user_id'=>$faker->unique()->numberBetween(101,250),
    ];
});
