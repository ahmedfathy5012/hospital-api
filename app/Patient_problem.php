<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient_problem extends Model
{

    protected $table = 'patient_problems';
    public $timestamps = true;
    protected $fillable = array('problem_describtion', 'patient_id');

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

}
