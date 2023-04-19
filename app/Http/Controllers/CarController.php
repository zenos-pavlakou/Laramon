<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends MongoCRUDController
{
    public function __construct(Car $model)
    {
        parent::__construct($model);
    }
}
