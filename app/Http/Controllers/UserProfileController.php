<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserProfile;

class UserProfileController extends MongoCRUDController
{
    public function __construct(UserProfile $model)
    {
        parent::__construct($model);
    }
}
