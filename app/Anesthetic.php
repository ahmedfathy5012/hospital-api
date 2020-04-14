<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anesthetic extends Model
{

    protected $table = 'anesthetics';
    public $timestamps = true;
    protected $fillable = array('name');

    public function operations()
    {
        return $this->hasMany(Operation::class);
    }

}
