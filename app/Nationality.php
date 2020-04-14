<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{

    protected $table = 'nationalities';
    public $timestamps = true;
    protected $fillable = array('name');

    public function doctor()
    {
        return $this->hasMany(Doctor::class);
    }

    public function nurse()
    {
        return $this->hasMany(Nurse::class);
    }

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }

    public function patient()
    {
        return $this->hasMany(Patient::class);
    }

}
