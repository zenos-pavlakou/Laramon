<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class NewExampleCollection extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'new_example_collections';
    protected $fillable = ['value_user_1', 'value_2', 'value_3', 'value_4'];
}
  