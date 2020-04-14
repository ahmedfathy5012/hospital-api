<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Analyze extends Model
{

    protected $table = 'analyzes';
    public $timestamps = true;
    protected $fillable = array('name');

    public function test()
    {
        return $this->hasOne(Test::class);
    }

}
