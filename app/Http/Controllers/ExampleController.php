<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Example;

class ExampleController extends MongoCRUDController
{
    public function __construct(Example $model)
    {
        parent::__construct($model);
    }
}
