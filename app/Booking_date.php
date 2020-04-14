<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking_date extends Model
{

    protected $table = 'booking_dates';
    public $timestamps = true;
    protected $fillable = array('appointment_time', 'appointment_date', 'patient_id');

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

}
