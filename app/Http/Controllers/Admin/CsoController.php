<?php

namespace App\Http\Controllers\Admin;

use App\ChannelServer;
use App\Csi;
use App\Cso;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCsoRequest;
use App\Http\Requests\UpdateCsoRequest;
use App\SyncServer;

class CsoController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('cso_access'), 403);

        $csos = Cso::all();

        return view('admin.csos.index', compact('csos'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('cso_create'), 403);

        $channel_server_input_sources = Csi::all()->pluck('protocol', 'id')->prepend(trans('global.pleaseSelect'), '');

        $select_sync_server_as = SyncServer::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $channel_servers = ChannelServer::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.csos.create', compact('channel_server_input_sources', 'select_sync_server_as', 'channel_servers'));
    }

    public function store(StoreCsoRequest $request)
    {
        abort_unless(\Gate::allows('cso_create'), 403);

        $cso = Cso::create($request->all());

        return redirect()->route('admin.csos.index');
    }

    public function edit(Cso $cso)
    {
        abort_unless(\Gate::allows('cso_edit'), 403);

        $channel_server_input_sources = Csi::all()->pluck('protocol', 'id')->prepend(trans('global.pleaseSelect'), '');

        $select_sync_server_as = SyncServer::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $channel_servers = ChannelServer::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $cso->load('channel_server_input_source', 'select_sync_server_a', 'channel_server');

        return view('admin.csos.edit', compact('channel_server_input_sources', 'select_sync_server_as', 'channel_servers', 'cso'));
    }

    public function update(UpdateCsoRequest $request, Cso $cso)
    {
        abort_unless(\Gate::allows('cso_edit'), 403);

        $cso->update($request->all());

        return redirect()->route('admin.csos.index');
    }

    public function show(Cso $cso)
    {
        abort_unless(\Gate::allows('cso_show'), 403);

        $cso->load('channel_server_input_source', 'select_sync_server_a', 'channel_server');

        return view('admin.csos.show', compact('cso'));
    }

    public function destroy(Cso $cso)
    {
        abort_unless(\Gate::allows('cso_delete'), 403);

        $cso->delete();

        return back();
    }
}
