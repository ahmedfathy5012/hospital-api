<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ambulance extends Model
{

    protected $table = 'ambulances';
    public $timestamps = true;
    protected $fillable = array('driver_id', 'car_number', 'paramedic_id');

    public function driver()
    {
        return $this->belongsTo(Employee::class, 'driver_id' , 'id');
    }

    public function paramedic()
    {
        return $this->belongsTo(Employee::class, 'paramedic_id','id');
    }

}
