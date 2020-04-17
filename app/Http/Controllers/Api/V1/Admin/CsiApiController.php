<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Csi;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCsiRequest;
use App\Http\Requests\UpdateCsiRequest;

class CsiApiController extends Controller
{
    public function index()
    {
        $csis = Csi::all();

        return $csis;
    }

    public function store(StoreCsiRequest $request)
    {
        return Csi::create($request->all());
    }

    public function update(UpdateCsiRequest $request, Csi $csi)
    {
        return $csi->update($request->all());
    }

    public function show(Csi $csi)
    {
        return $csi;
    }

    public function destroy(Csi $csi)
    {
        return $csi->delete();
    }
}
