<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{

    protected $table = 'patients';
    public $timestamps = true;
    protected $fillable = array('date_of_file', 'first_name', 'second_name', 'third_name', 'nationality_id', 'address', 'date-of-birth', 'phone', 'email', 'social_status', 'job', 'sex_id', 'blood_id', 'image', 'notes', 'user_id');

    public function sex()
    {
        return $this->belongsTo(Sex::class);
    }

    public function blood()
    {
        return $this->belongsTo(Blood::class);
    }

    public function nationality()
    {
        return $this->belongsTo(Nationality::class);
    }

    public function patient_problems()
    {
        return $this->hasMany(Patient_problem::class);
    }

    public function patient_cases()
    {
        return $this->hasMany(Patient_Case::class);
    }

    public function dead()
    {
        return $this->hasOne(Dead::class);
    }

    public function operations()
    {
        return $this->hasMany(Operation::class);
    }

    public function tests()
    {
        return $this->hasMany(Test::class);
    }

    public function emergencies()
    {
        return $this->hasOne(Emergency::class);
    }

    public function booking_dates()
    {
        return $this->hasMany(Booking_date::class);
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
