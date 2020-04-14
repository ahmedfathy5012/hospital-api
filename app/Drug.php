<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model 
{

    protected $table = 'drugs';
    public $timestamps = true;
    protected $fillable = array('name', 'count', 'production_date', 'expiry_date', 'how_to_use');

}