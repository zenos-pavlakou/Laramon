<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Foobar extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'foobars';
    protected $fillable = ['string_val', 'int_val', 'bool_val'];
}
  