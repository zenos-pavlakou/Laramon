<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foobar;

class FoobarController extends MongoCRUDController
{
    public function __construct(Foobar $model)
    {
        parent::__construct($model);
    }
}
