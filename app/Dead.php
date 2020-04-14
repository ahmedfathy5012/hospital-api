<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dead extends Model
{

    protected $table = 'deads';
    public $timestamps = true;
    protected $fillable = array('patient_id', 'death_date', 'cause_of_death', 'doctor_id');

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

}
