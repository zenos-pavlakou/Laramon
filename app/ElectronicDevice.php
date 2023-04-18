<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class ElectronicDevice extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'electronic_devices';
    protected $fillable = ["name","make","price"];
}
  