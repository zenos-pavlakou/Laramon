<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserInfoChangeRequest;

class UserInfoChangeRequestController extends MongoCRUDController
{
    public function __construct(UserInfoChangeRequest $model)
    {
        parent::__construct($model);
    }
}
