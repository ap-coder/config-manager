<?php

namespace App\Http\Controllers\Admin;

use App\Channel;
use App\ChannelServer;
use App\Csi;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCsiRequest;
use App\Http\Requests\UpdateCsiRequest;

class CsiController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('csi_access'), 403);

        $csis = Csi::all();

        return view('admin.csis.index', compact('csis'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('csi_create'), 403);

        $channels = Channel::all()->pluck('source_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $channel_servers = ChannelServer::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.csis.create', compact('channels', 'channel_servers'));
    }

    public function store(StoreCsiRequest $request)
    {
        abort_unless(\Gate::allows('csi_create'), 403);

        $csi = Csi::create($request->all());

        return redirect()->route('admin.csis.index');
    }

    public function edit(Csi $csi)
    {
        abort_unless(\Gate::allows('csi_edit'), 403);

        $channels = Channel::all()->pluck('source_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $channel_servers = ChannelServer::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $csi->load('channel', 'channel_server');

        return view('admin.csis.edit', compact('channels', 'channel_servers', 'csi'));
    }

    public function update(UpdateCsiRequest $request, Csi $csi)
    {
        abort_unless(\Gate::allows('csi_edit'), 403);

        $csi->update($request->all());

        return redirect()->route('admin.csis.index');
    }

    public function show(Csi $csi)
    {
        abort_unless(\Gate::allows('csi_show'), 403);

        $csi->load('channel', 'channel_server');

        return view('admin.csis.show', compact('csi'));
    }

    public function destroy(Csi $csi)
    {
        abort_unless(\Gate::allows('csi_delete'), 403);

        $csi->delete();

        return back();
    }
}
