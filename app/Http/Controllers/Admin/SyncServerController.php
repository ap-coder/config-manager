<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSyncServerRequest;
use App\Http\Requests\UpdateSyncServerRequest;
use App\SyncServer;

class SyncServerController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('sync_server_access'), 403);

        $syncServers = SyncServer::all();

        return view('admin.syncServers.index', compact('syncServers'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('sync_server_create'), 403);

        return view('admin.syncServers.create');
    }

    public function store(StoreSyncServerRequest $request)
    {
        abort_unless(\Gate::allows('sync_server_create'), 403);

        $syncServer = SyncServer::create($request->all());

        return redirect()->route('admin.sync-servers.index');
    }

    public function edit(SyncServer $syncServer)
    {
        abort_unless(\Gate::allows('sync_server_edit'), 403);

        return view('admin.syncServers.edit', compact('syncServer'));
    }

    public function update(UpdateSyncServerRequest $request, SyncServer $syncServer)
    {
        abort_unless(\Gate::allows('sync_server_edit'), 403);

        $syncServer->update($request->all());

        return redirect()->route('admin.sync-servers.index');
    }

    public function show(SyncServer $syncServer)
    {
        abort_unless(\Gate::allows('sync_server_show'), 403);

        return view('admin.syncServers.show', compact('syncServer'));
    }

    public function destroy(SyncServer $syncServer)
    {
        abort_unless(\Gate::allows('sync_server_delete'), 403);

        $syncServer->delete();

        return back();
    }
}
