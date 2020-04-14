<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor_problem extends Model
{

    protected $table = 'doctor_problems';
    public $timestamps = true;
    protected $fillable = array('doctor_id', 'doctor_problem');

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

}
