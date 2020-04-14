<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnose extends Model
{

    protected $table = 'diagnoses';
    public $timestamps = true;
    protected $fillable = array('diagnose', 'drugs', 'doctor_id', 'patient_case_id');

    public function patient_case()
    {
        return $this->belongsTo(Patient_Case::class,'patient_case_id','id');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

}
