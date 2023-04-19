<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Example extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'examples';
    protected $fillable = ['str_val', 'int_val'];
}
  