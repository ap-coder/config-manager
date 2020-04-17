<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\ChannelServer;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChannelServerRequest;
use App\Http\Requests\UpdateChannelServerRequest;

class ChannelServerApiController extends Controller
{
    public function index()
    {
        $channelServers = ChannelServer::all();

        return $channelServers;
    }

    public function store(StoreChannelServerRequest $request)
    {
        return ChannelServer::create($request->all());
    }

    public function update(UpdateChannelServerRequest $request, ChannelServer $channelServer)
    {
        return $channelServer->update($request->all());
    }

    public function show(ChannelServer $channelServer)
    {
        return $channelServer;
    }

    public function destroy(ChannelServer $channelServer)
    {
        return $channelServer->delete();
    }
}
