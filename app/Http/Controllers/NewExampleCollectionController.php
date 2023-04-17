<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewExampleCollection;

class NewExampleCollectionController extends MongoCRUDController
{
    public function __construct(NewExampleCollection $model)
    {
        parent::__construct($model);
    }
}
