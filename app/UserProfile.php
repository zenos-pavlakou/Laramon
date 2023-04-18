<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class UserProfile extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'user_profiles';
    protected $fillable = [];
}
  