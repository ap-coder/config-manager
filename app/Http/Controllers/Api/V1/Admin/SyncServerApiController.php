<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSyncServerRequest;
use App\Http\Requests\UpdateSyncServerRequest;
use App\SyncServer;

class SyncServerApiController extends Controller
{
    public function index()
    {
        $syncServers = SyncServer::all();

        return $syncServers;
    }

    public function store(StoreSyncServerRequest $request)
    {
        return SyncServer::create($request->all());
    }

    public function update(UpdateSyncServerRequest $request, SyncServer $syncServer)
    {
        return $syncServer->update($request->all());
    }

    public function show(SyncServer $syncServer)
    {
        return $syncServer;
    }

    public function destroy(SyncServer $syncServer)
    {
        return $syncServer->delete();
    }
}
