<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;

class VehicleController extends MongoCRUDController
{
    public function __construct(Vehicle $model)
    {
        parent::__construct($model);
    }
}
