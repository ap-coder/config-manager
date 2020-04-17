@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.channelServer.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.channel-servers.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection