<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{

    protected $table = 'hospitals';
    public $timestamps = true;
    protected $fillable = array('name', 'number', 'phone', 'specialization_id');

    public function specialization()
    {
        return $this->belongsTo(Specialization::class);
    }

}
