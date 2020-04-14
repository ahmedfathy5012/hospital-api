<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    protected $table = 'jobs';
    public $timestamps = true;
    protected $fillable = array('name');

    public function nurse()
    {
        return $this->hasMany(Nurse::class);
    }

    public function doctor()
    {
        return $this->hasMany(Doctor::class);
    }

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }

}
