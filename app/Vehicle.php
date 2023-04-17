<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Vehicle extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'vehicles';
    protected $fillable = ['license_plate', 'make', "other", "foo"];
}
  