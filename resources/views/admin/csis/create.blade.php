@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.csi.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.csis.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('protocol') ? 'has-error' : '' }}">
                <label for="protocol">{{ trans('cruds.csi.fields.protocol') }}</label>
                <input type="text" id="protocol" name="protocol" class="form-control" value="{{ old('protocol', isset($csi) ? $csi->protocol : '') }}">
                @if($errors->has('protocol'))
                    <em class="invalid-feedback">
                        {{ $errors->first('protocol') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.csi.fields.protocol_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('move_path') ? 'has-error' : '' }}">
                <label for="move_path">{{ trans('cruds.csi.fields.move_path') }}</label>
                <input type="text" id="move_path" name="move_path" class="form-control" value="{{ old('move_path', isset($csi) ? $csi->move_path : '') }}">
                @if($errors->has('move_path'))
                    <em class="invalid-feedback">
                        {{ $errors->first('move_path') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.csi.fields.move_path_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('channel_id') ? 'has-error' : '' }}">
                <label for="channel">{{ trans('cruds.csi.fields.channel') }}</label>
                <select name="channel_id" id="channel" class="form-control select2">
                    @foreach($channels as $id => $channel)
                        <option value="{{ $id }}" {{ (isset($csi) && $csi->channel ? $csi->channel->id : old('channel_id')) == $id ? 'selected' : '' }}>{{ $channel }}</option>
                    @endforeach
                </select>
                @if($errors->has('channel_id'))
                    <em class="invalid-feedback">
                        {{ $errors->first('channel_id') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('channel_server_id') ? 'has-error' : '' }}">
                <label for="channel_server">{{ trans('cruds.csi.fields.channel_server') }}</label>
                <select name="channel_server_id" id="channel_server" class="form-control select2">
                    @foreach($channel_servers as $id => $channel_server)
                        <option value="{{ $id }}" {{ (isset($csi) && $csi->channel_server ? $csi->channel_server->id : old('channel_server_id')) == $id ? 'selected' : '' }}>{{ $channel_server }}</option>
                    @endforeach
                </select>
                @if($errors->has('channel_server_id'))
                    <em class="invalid-feedback">
                        {{ $errors->first('channel_server_id') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('use_dev_channels') ? 'has-error' : '' }}">
                <label for="use_dev_channels">{{ trans('cruds.csi.fields.use_dev_channels') }}</label>
                <input name="use_dev_channels" type="hidden" value="0">
                <input value="1" type="checkbox" id="use_dev_channels" name="use_dev_channels" {{ old('use_dev_channels', 0) == 1 || old('use_dev_channels') === null ? 'checked' : '' }}>
                @if($errors->has('use_dev_channels'))
                    <em class="invalid-feedback">
                        {{ $errors->first('use_dev_channels') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.csi.fields.use_dev_channels_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('use_beta_channels') ? 'has-error' : '' }}">
                <label for="use_beta_channels">{{ trans('cruds.csi.fields.use_beta_channels') }}</label>
                <input name="use_beta_channels" type="hidden" value="0">
                <input value="1" type="checkbox" id="use_beta_channels" name="use_beta_channels" {{ old('use_beta_channels', 0) == 1 || old('use_beta_channels') === null ? 'checked' : '' }}>
                @if($errors->has('use_beta_channels'))
                    <em class="invalid-feedback">
                        {{ $errors->first('use_beta_channels') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.csi.fields.use_beta_channels_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('use_qa_channels') ? 'has-error' : '' }}">
                <label for="use_qa_channels">{{ trans('cruds.csi.fields.use_qa_channels') }}</label>
                <input name="use_qa_channels" type="hidden" value="0">
                <input value="1" type="checkbox" id="use_qa_channels" name="use_qa_channels" {{ old('use_qa_channels', 0) == 1 || old('use_qa_channels') === null ? 'checked' : '' }}>
                @if($errors->has('use_qa_channels'))
                    <em class="invalid-feedback">
                        {{ $errors->first('use_qa_channels') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.csi.fields.use_qa_channels_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('use_production_channels') ? 'has-error' : '' }}">
                <label for="use_production_channels">{{ trans('cruds.csi.fields.use_production_channels') }}</label>
                <input name="use_production_channels" type="hidden" value="0">
                <input value="1" type="checkbox" id="use_production_channels" name="use_production_channels" {{ old('use_production_channels', 0) == 1 ? 'checked' : '' }}>
                @if($errors->has('use_production_channels'))
                    <em class="invalid-feedback">
                        {{ $errors->first('use_production_channels') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.csi.fields.use_production_channels_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection