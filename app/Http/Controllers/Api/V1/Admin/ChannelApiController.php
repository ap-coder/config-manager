<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Channel;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChannelRequest;
use App\Http\Requests\UpdateChannelRequest;

class ChannelApiController extends Controller
{
    public function index()
    {
        $channels = Channel::all();

        return $channels;
    }

    public function store(StoreChannelRequest $request)
    {
        return Channel::create($request->all());
    }

    public function update(UpdateChannelRequest $request, Channel $channel)
    {
        return $channel->update($request->all());
    }

    public function show(Channel $channel)
    {
        return $channel;
    }

    public function destroy(Channel $channel)
    {
        return $channel->delete();
    }
}
