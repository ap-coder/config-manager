<?php

namespace App\Http\Controllers\Admin;

use App\ChannelServer;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChannelServerRequest;
use App\Http\Requests\UpdateChannelServerRequest;

class ChannelServerController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('channel_server_access'), 403);

        $channelServers = ChannelServer::all();

        return view('admin.channelServers.index', compact('channelServers'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('channel_server_create'), 403);

        return view('admin.channelServers.create');
    }

    public function store(StoreChannelServerRequest $request)
    {
        abort_unless(\Gate::allows('channel_server_create'), 403);

        $channelServer = ChannelServer::create($request->all());

        return redirect()->route('admin.channel-servers.index');
    }

    public function edit(ChannelServer $channelServer)
    {
        abort_unless(\Gate::allows('channel_server_edit'), 403);

        return view('admin.channelServers.edit', compact('channelServer'));
    }

    public function update(UpdateChannelServerRequest $request, ChannelServer $channelServer)
    {
        abort_unless(\Gate::allows('channel_server_edit'), 403);

        $channelServer->update($request->all());

        return redirect()->route('admin.channel-servers.index');
    }

    public function show(ChannelServer $channelServer)
    {
        abort_unless(\Gate::allows('channel_server_show'), 403);

        return view('admin.channelServers.show', compact('channelServer'));
    }

    public function destroy(ChannelServer $channelServer)
    {
        abort_unless(\Gate::allows('channel_server_delete'), 403);

        $channelServer->delete();

        return back();
    }
}
