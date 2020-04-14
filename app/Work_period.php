<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work_period extends Model
{

    protected $table = 'work_periods';
    public $timestamps = true;
    protected $fillable = array('doctor_id', 'time_attendance', 'time_leave', 'day_id');

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public  function day(){
        return $this->hasMany(Day::class,'id','day_id');
    }

}
