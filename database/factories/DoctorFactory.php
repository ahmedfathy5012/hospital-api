<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Doctor;
use Faker\Generator as Faker;

$factory->define(Doctor::class, function (Faker $faker) {
    return [
        'date_of_hiring' => now(),
        'first_name' =>$faker->firstName,
        'second_name'=>$faker->firstName,
        'third_name'=>$faker->lastName,
        'specialization_id'=>$faker->numberBetween(1,10),
        'nationality_id'=>$faker->numberBetween(1,5),
        'address'=>$faker->address,
        'date_of_birth'=>$faker->date(),
        'phone'=>$faker->phoneNumber,
        'email'=>$faker->email,
        'social_status'=>$faker->randomElement(['Married','Celibate']),
        'job_id'=>$faker->numberBetween(1,3),
        'sex_id' => $faker->numberBetween(1,3),
        'blood_id' =>$faker->numberBetween(1,8),
        'notes'=>$faker->text(200),
        'image'=>$faker->imageUrl(),
        'user_id'=>$faker->unique()->numberBetween(1,100),
    ];
});
