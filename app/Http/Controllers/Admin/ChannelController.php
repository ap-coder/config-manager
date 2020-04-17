<?php

namespace App\Http\Controllers\Admin;

use App\Channel;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChannelRequest;
use App\Http\Requests\UpdateChannelRequest;

class ChannelController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('channel_access'), 403);

        $channels = Channel::all();

        return view('admin.channels.index', compact('channels'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('channel_create'), 403);

        return view('admin.channels.create');
    }

    public function store(StoreChannelRequest $request)
    {
        abort_unless(\Gate::allows('channel_create'), 403);

        $channel = Channel::create($request->all());

        return redirect()->route('admin.channels.index');
    }

    public function edit(Channel $channel)
    {
        abort_unless(\Gate::allows('channel_edit'), 403);

        return view('admin.channels.edit', compact('channel'));
    }

    public function update(UpdateChannelRequest $request, Channel $channel)
    {
        abort_unless(\Gate::allows('channel_edit'), 403);

        $channel->update($request->all());

        return redirect()->route('admin.channels.index');
    }

    public function show(Channel $channel)
    {
        abort_unless(\Gate::allows('channel_show'), 403);

        return view('admin.channels.show', compact('channel'));
    }

    public function destroy(Channel $channel)
    {
        abort_unless(\Gate::allows('channel_delete'), 403);

        $channel->delete();

        return back();
    }
}
