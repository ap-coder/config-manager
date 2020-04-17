<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Cso;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCsoRequest;
use App\Http\Requests\UpdateCsoRequest;

class CsoApiController extends Controller
{
    public function index()
    {
        $csos = Cso::all();

        return $csos;
    }

    public function store(StoreCsoRequest $request)
    {
        return Cso::create($request->all());
    }

    public function update(UpdateCsoRequest $request, Cso $cso)
    {
        return $cso->update($request->all());
    }

    public function show(Cso $cso)
    {
        return $cso;
    }

    public function destroy(Cso $cso)
    {
        return $cso->delete();
    }
}
