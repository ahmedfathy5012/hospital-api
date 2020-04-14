<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{

    protected $table = 'operations';
    public $timestamps = true;
    protected $fillable = array('patient_id', 'anesthesiologist_id', 'anesthetic_id', 'date', 'name', 'surgeon_id');

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function anesthetic()
    {
        return $this->belongsTo(Anesthetic::class);
    }

    public function surgeon()
    {
        return $this->belongsTo(Doctor::class, 'id', 'surgeon_id');
    }

    public function anesthesiologist()
    {
        return $this->belongsTo(Doctor::class, 'id', 'anesthesiologist_id');
    }

}
