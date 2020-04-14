<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{

    protected $table = 'tests';
    public $timestamps = true;
    protected $fillable = array('patient_id', 'date', 'analyze_result', 'doctor_id','analyze_id');

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function analyze()
    {
        return $this->belongsTo(Analyze::class);
    }

}
