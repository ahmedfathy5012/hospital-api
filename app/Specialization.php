<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{

    protected $table = 'specializations';
    public $timestamps = true;
    protected $fillable = array('name');

    public function doctor()
    {
        return $this->hasMany(Doctor::class);
    }

    public function hospitals()
    {
        return $this->hasMany(Hospital::class);
    }

    public function outpatient_clinics()
    {
        return $this->hasOne(Outpatient_clinic::class);
    }

}
