<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blood extends Model
{

    protected $table = 'blood';
    public $timestamps = true;
    protected $fillable = array('name');

    public function doctor()
    {
        return $this->hasMany(Doctor::class);
    }

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }

    public function nurse()
    {
        return $this->hasMany(Nurse::class);
    }

    public function patient()
    {
        return $this->hasMany(Patient::class);
    }

}
