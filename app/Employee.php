<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    protected $table = 'employees';
    public $timestamps = true;
    protected $fillable = array('date_of_hiring', 'first_name', 'second_name', 'third_name', 'nationality_id', 'address', 'date-of-birth', 'phone', 'email', 'social_status', 'job_id', 'sex_id', 'blood_id', 'notes', 'image', 'user_id');

    public function job()
    {
        return $this->belongsTo(Job::class);
    }

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

    public function ambulance_drivers()
    {
        return $this->hasMany(Ambulance::class, 'driver_id', 'id');
    }

    public function ambulance_paramedics()
    {
        return $this->hasMany(Ambulance::class, 'Paramedic_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
