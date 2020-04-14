<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient_Case extends Model
{

    protected $table = 'patient_cases';
    public $timestamps = true;
    protected $fillable = array('patient_id', 'entry_date', 'exit_date');

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function diagnose()
    {
        return $this->hasMany(Diagnose::class,'patient_case_id','id');
    }

}
