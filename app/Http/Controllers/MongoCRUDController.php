<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Mongodb\Eloquent\Model;

class MongoCRUDController extends Controller
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function index(Request $request)
    {
        return $this->model->paginate($request->input('per_page', 10));
    }

    public function store(Request $request)
    {
        return $this->model->create($request->all());
    }

    public function show($id)
    {
        return $this->model->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $model = $this->model->findOrFail($id);
        $model->update($request->all());
        return $model;
    }

    public function destroy($id)
    {
        $model = $this->model->findOrFail($id);
        $model->delete();
        return response()->noContent();
    }
}
