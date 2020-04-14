<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emergency extends Model
{

    protected $table = 'Emergencies';
    public $timestamps = true;
    protected $fillable = array('patient_id', 'injury_type', 'doctor_id');

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

}
