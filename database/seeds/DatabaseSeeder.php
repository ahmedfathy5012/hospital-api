<?php

use App\Ambulance;
use App\Analyze;
use App\Anesthetic;
use App\Blood;
use App\Booking_date;
use App\Clinic;
use App\Day;
use App\Dead;
use App\Diagnose;
use App\Doctor;
use App\Doctor_problem;
use App\Drug;
use App\Emergency;
use App\Employee;
use App\Hospital;
use App\Job;
use App\Nationality;
use App\Nurse;
use App\Operation;
use App\Outpatient_clinic;
use App\Patient;
use App\Patient_Case;
use App\Patient_problem;
use App\Role;
use App\Room;
use App\Section;
use App\Sex;
use App\Specialization;
use App\User;
use App\Work_period;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        factory(User ::class , 100)->create();
        factory(Doctor ::class , 20)->create();
        factory(Patient ::class , 50)->create();
        factory(Nurse ::class , 15)->create();
        factory(Employee ::class , 15)->create();
        factory(Nationality ::class , 5)->create();
        factory(Sex ::class , 3)->create();
       factory(Blood ::class , 8)->create();
        factory(Job ::class ,11)->create();
        factory(Specialization ::class ,10)->create();

//        factory(Ambulance ::class ,5)->create();
//        factory(Anesthetic ::class ,20)->create();
//        factory(Operation ::class ,20)->create();
//        factory(Booking_date ::class ,20)->create();
//        factory(Clinic ::class ,50)->create();
//        factory(Dead ::class ,5)->create();
//        factory(Diagnose ::class ,50)->create();
//        factory(Patient_Case ::class ,50)->create();
//        factory(Doctor_problem ::class ,10)->create();
//        factory(Drug ::class ,500)->create();
//        factory(Emergency ::class ,5)->create();
//        factory(Hospital ::class ,20)->create();
//        factory(Outpatient_clinic ::class ,7)->create();
//        factory(Patient_problem ::class ,10)->create();
//        factory(Room ::class ,300)->create();
//        factory(Section ::class ,15)->create();
//       factory(Work_period ::class ,20)->create();
//        factory(Analyze ::class ,20)->create();
//        factory(\App\Test ::class ,20)->create();
//        factory(Day ::class ,7)->create();
//        factory(Role::class,5)->create();

    }
}
