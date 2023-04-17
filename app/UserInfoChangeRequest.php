<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class UserInfoChangeRequest extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'user_info_change_requests';
    protected $fillable = ['user_id', 'email_address', 'home_address', 'status'];
}
  