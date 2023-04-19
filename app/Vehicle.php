<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Vehicle extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'vehicles';
    protected $fillable = ["field_1","field_2","field_3"];
}
  