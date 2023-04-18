<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Hardware extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'hardwares';
    protected $fillable = [];
}
  