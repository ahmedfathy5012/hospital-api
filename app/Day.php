<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    protected $table = 'days';
    public $timestamps = true;
    protected $fillable = array('day',);

    public  function work_period(){
        return $this->belongsTo(Work_period::class,'id','day_id');
    }
}
