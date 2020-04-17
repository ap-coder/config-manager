@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.cso.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.csos.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('channel_server_input_source_id') ? 'has-error' : '' }}">
                <label for="channel_server_input_source">{{ trans('cruds.cso.fields.channel_server_input_source') }}</label>
                <select name="channel_server_input_source_id" id="channel_server_input_source" class="form-control select2">
                    @foreach($channel_server_input_sources as $id => $channel_server_input_source)
                        <option value="{{ $id }}" {{ (isset($cso) && $cso->channel_server_input_source ? $cso->channel_server_input_source->id : old('channel_server_input_source_id')) == $id ? 'selected' : '' }}>{{ $channel_server_input_source }}</option>
                    @endforeach
                </select>
                @if($errors->has('channel_server_input_source_id'))
                    <em class="invalid-feedback">
                        {{ $errors->first('channel_server_input_source_id') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('use_channel_server_localhost') ? 'has-error' : '' }}">
                <label for="use_channel_server_localhost">{{ trans('cruds.cso.fields.use_channel_server_localhost') }}</label>
                <input name="use_channel_server_localhost" type="hidden" value="0">
                <input value="1" type="checkbox" id="use_channel_server_localhost" name="use_channel_server_localhost" {{ old('use_channel_server_localhost', 0) == 1 ? 'checked' : '' }}>
                @if($errors->has('use_channel_server_localhost'))
                    <em class="invalid-feedback">
                        {{ $errors->first('use_channel_server_localhost') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.cso.fields.use_channel_server_localhost_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('use_default_a') ? 'has-error' : '' }}">
                <label for="use_default_a">{{ trans('cruds.cso.fields.use_default_a') }}</label>
                <input name="use_default_a" type="hidden" value="0">
                <input value="1" type="checkbox" id="use_default_a" name="use_default_a" {{ old('use_default_a', 0) == 1 ? 'checked' : '' }}>
                @if($errors->has('use_default_a'))
                    <em class="invalid-feedback">
                        {{ $errors->first('use_default_a') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.cso.fields.use_default_a_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('host_a') ? 'has-error' : '' }}">
                <label for="host_a">{{ trans('cruds.cso.fields.host_a') }}</label>
                <input type="text" id="host_a" name="host_a" class="form-control" value="{{ old('host_a', isset($cso) ? $cso->host_a : '') }}">
                @if($errors->has('host_a'))
                    <em class="invalid-feedback">
                        {{ $errors->first('host_a') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.cso.fields.host_a_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('host_a_port') ? 'has-error' : '' }}">
                <label for="host_a_port">{{ trans('cruds.cso.fields.host_a_port') }}</label>
                <input type="text" id="host_a_port" name="host_a_port" class="form-control" value="{{ old('host_a_port', isset($cso) ? $cso->host_a_port : '') }}">
                @if($errors->has('host_a_port'))
                    <em class="invalid-feedback">
                        {{ $errors->first('host_a_port') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.cso.fields.host_a_port_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('use_default_b') ? 'has-error' : '' }}">
                <label for="use_default_b">{{ trans('cruds.cso.fields.use_default_b') }}</label>
                <input name="use_default_b" type="hidden" value="0">
                <input value="1" type="checkbox" id="use_default_b" name="use_default_b" {{ old('use_default_b', 0) == 1 ? 'checked' : '' }}>
                @if($errors->has('use_default_b'))
                    <em class="invalid-feedback">
                        {{ $errors->first('use_default_b') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.cso.fields.use_default_b_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('host_b') ? 'has-error' : '' }}">
                <label for="host_b">{{ trans('cruds.cso.fields.host_b') }}</label>
                <input type="text" id="host_b" name="host_b" class="form-control" value="{{ old('host_b', isset($cso) ? $cso->host_b : '') }}">
                @if($errors->has('host_b'))
                    <em class="invalid-feedback">
                        {{ $errors->first('host_b') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.cso.fields.host_b_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('host_b_port') ? 'has-error' : '' }}">
                <label for="host_b_port">{{ trans('cruds.cso.fields.host_b_port') }}</label>
                <input type="text" id="host_b_port" name="host_b_port" class="form-control" value="{{ old('host_b_port', isset($cso) ? $cso->host_b_port : '') }}">
                @if($errors->has('host_b_port'))
                    <em class="invalid-feedback">
                        {{ $errors->first('host_b_port') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.cso.fields.host_b_port_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('use_aggragation_for_a') ? 'has-error' : '' }}">
                <label for="use_aggragation_for_a">{{ trans('cruds.cso.fields.use_aggragation_for_a') }}</label>
                <input name="use_aggragation_for_a" type="hidden" value="0">
                <input value="1" type="checkbox" id="use_aggragation_for_a" name="use_aggragation_for_a" {{ old('use_aggragation_for_a', 0) == 1 ? 'checked' : '' }}>
                @if($errors->has('use_aggragation_for_a'))
                    <em class="invalid-feedback">
                        {{ $errors->first('use_aggragation_for_a') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.cso.fields.use_aggragation_for_a_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('use_aggragation_for_b') ? 'has-error' : '' }}">
                <label for="use_aggragation_for_b">{{ trans('cruds.cso.fields.use_aggragation_for_b') }}</label>
                <input name="use_aggragation_for_b" type="hidden" value="0">
                <input value="1" type="checkbox" id="use_aggragation_for_b" name="use_aggragation_for_b" {{ old('use_aggragation_for_b', 0) == 1 ? 'checked' : '' }}>
                @if($errors->has('use_aggragation_for_b'))
                    <em class="invalid-feedback">
                        {{ $errors->first('use_aggragation_for_b') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.cso.fields.use_aggragation_for_b_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('use_sync_server_for_a') ? 'has-error' : '' }}">
                <label for="use_sync_server_for_a">{{ trans('cruds.cso.fields.use_sync_server_for_a') }}</label>
                <input name="use_sync_server_for_a" type="hidden" value="0">
                <input value="1" type="checkbox" id="use_sync_server_for_a" name="use_sync_server_for_a" {{ old('use_sync_server_for_a', 0) == 1 ? 'checked' : '' }}>
                @if($errors->has('use_sync_server_for_a'))
                    <em class="invalid-feedback">
                        {{ $errors->first('use_sync_server_for_a') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.cso.fields.use_sync_server_for_a_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('select_sync_server_a_id') ? 'has-error' : '' }}">
                <label for="select_sync_server_a">{{ trans('cruds.cso.fields.select_sync_server_a') }}</label>
                <select name="select_sync_server_a_id" id="select_sync_server_a" class="form-control select2">
                    @foreach($select_sync_server_as as $id => $select_sync_server_a)
                        <option value="{{ $id }}" {{ (isset($cso) && $cso->select_sync_server_a ? $cso->select_sync_server_a->id : old('select_sync_server_a_id')) == $id ? 'selected' : '' }}>{{ $select_sync_server_a }}</option>
                    @endforeach
                </select>
                @if($errors->has('select_sync_server_a_id'))
                    <em class="invalid-feedback">
                        {{ $errors->first('select_sync_server_a_id') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('use_sync_server_for_b') ? 'has-error' : '' }}">
                <label for="use_sync_server_for_b">{{ trans('cruds.cso.fields.use_sync_server_for_b') }}</label>
                <input name="use_sync_server_for_b" type="hidden" value="0">
                <input value="1" type="checkbox" id="use_sync_server_for_b" name="use_sync_server_for_b" {{ old('use_sync_server_for_b', 0) == 1 ? 'checked' : '' }}>
                @if($errors->has('use_sync_server_for_b'))
                    <em class="invalid-feedback">
                        {{ $errors->first('use_sync_server_for_b') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.cso.fields.use_sync_server_for_b_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('channel_server_id') ? 'has-error' : '' }}">
                <label for="channel_server">{{ trans('cruds.cso.fields.channel_server') }}</label>
                <select name="channel_server_id" id="channel_server" class="form-control select2">
                    @foreach($channel_servers as $id => $channel_server)
                        <option value="{{ $id }}" {{ (isset($cso) && $cso->channel_server ? $cso->channel_server->id : old('channel_server_id')) == $id ? 'selected' : '' }}>{{ $channel_server }}</option>
                    @endforeach
                </select>
                @if($errors->has('channel_server_id'))
                    <em class="invalid-feedback">
                        {{ $errors->first('channel_server_id') }}
                    </em>
                @endif
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection