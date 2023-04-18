<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hardware;

class HardwareController extends MongoCRUDController
{
    public function __construct(Hardware $model)
    {
        parent::__construct($model);
    }
}
