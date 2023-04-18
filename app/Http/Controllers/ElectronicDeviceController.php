<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ElectronicDevice;

class ElectronicDeviceController extends MongoCRUDController
{
    public function __construct(ElectronicDevice $model)
    {
        parent::__construct($model);
    }
}
