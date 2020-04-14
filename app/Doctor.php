<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{

    protected $table = 'doctors';
    public $timestamps = true;
    protected $fillable = array('date_of_hiring', 'first_name', 'second_name', 'third_name', 'specialization_id', 'nationality_id', 'address', 'date_of_birth', 'phone', 'email', 'social_status', 'job_id', 'sex_id', 'blood_id', 'notes', 'image', 'user_id');

    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function blood()
    {
        return $this->belongsTo(Blood::class);
    }

    public function sex()
    {
        return $this->belongsTo(Sex::class);
    }

    public function nationality()
    {
        return $this->belongsTo(Nationality::class);
    }

    public function specialization()
    {
        return $this->belongsTo(Specialization::class);
    }

    public function doctor_problems()
    {
        return $this->hasMany(Doctor_problem::class);
    }

    public function deads()
    {
        return $this->hasMany(Dead::class);
    }

    public function diagnoses()
    {
        return $this->hasMany(Diagnose::class);
    }

    public function tests()
    {
        return $this->hasMany(Test::class);
    }

    public function emergencies()
    {
        return $this->hasMany(Emergency::class);
    }

    public function work_periods()
    {
        return $this->hasMany(Work_period::class);
    }

    public function operations_anesthesiologist()
    {
        return $this->hasMany(Operation::class, 'anesthesiologist_id');
    }

    public function operations_surgeon()
    {
        return $this->hasOne(Operation::class, 'surgeon_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function full_name(){
        return $this->first_name." ".$this->second_name." ".$this->third_name;
    }

    public function show_name(){
        return $this->first_name." "." ".$this->third_name;
    }


}
