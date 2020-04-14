<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outpatient_clinic extends Model
{

    protected $table = 'outpatient_clinics';
    public $timestamps = true;
    protected $fillable = array('name', 'number', 'phone', 'specialization_id');

    public function specialization()
    {
        return $this->belongsTo(Specialization::class);
    }

}
