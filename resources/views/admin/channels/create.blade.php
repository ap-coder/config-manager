@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.channel.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.channels.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('source_name') ? 'has-error' : '' }}">
                <label for="source_name">{{ trans('cruds.channel.fields.source_name') }}</label>
                <input type="text" id="source_name" name="source_name" class="form-control" value="{{ old('source_name', isset($channel) ? $channel->source_name : '') }}">
                @if($errors->has('source_name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('source_name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.channel.fields.source_name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('channelid') ? 'has-error' : '' }}">
                <label for="channelid">{{ trans('cruds.channel.fields.channelid') }}</label>
                <input type="text" id="channelid" name="channelid" class="form-control" value="{{ old('channelid', isset($channel) ? $channel->channelid : '') }}">
                @if($errors->has('channelid'))
                    <em class="invalid-feedback">
                        {{ $errors->first('channelid') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.channel.fields.channelid_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('env') ? 'has-error' : '' }}">
                <label for="env">{{ trans('cruds.channel.fields.env') }}</label>
                <input type="text" id="env" name="env" class="form-control" value="{{ old('env', isset($channel) ? $channel->env : '') }}">
                @if($errors->has('env'))
                    <em class="invalid-feedback">
                        {{ $errors->first('env') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.channel.fields.env_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('source_ip') ? 'has-error' : '' }}">
                <label for="source_ip">{{ trans('cruds.channel.fields.source_ip') }}</label>
                <input type="text" id="source_ip" name="source_ip" class="form-control" value="{{ old('source_ip', isset($channel) ? $channel->source_ip : '') }}">
                @if($errors->has('source_ip'))
                    <em class="invalid-feedback">
                        {{ $errors->first('source_ip') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.channel.fields.source_ip_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('udp') ? 'has-error' : '' }}">
                <label for="udp">{{ trans('cruds.channel.fields.udp') }}</label>
                <input type="text" id="udp" name="udp" class="form-control" value="{{ old('udp', isset($channel) ? $channel->udp : '') }}">
                @if($errors->has('udp'))
                    <em class="invalid-feedback">
                        {{ $errors->first('udp') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.channel.fields.udp_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('ffmpegsource') ? 'has-error' : '' }}">
                <label for="ffmpegsource">{{ trans('cruds.channel.fields.ffmpegsource') }}</label>
                <input type="text" id="ffmpegsource" name="ffmpegsource" class="form-control" value="{{ old('ffmpegsource', isset($channel) ? $channel->ffmpegsource : '') }}">
                @if($errors->has('ffmpegsource'))
                    <em class="invalid-feedback">
                        {{ $errors->first('ffmpegsource') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.channel.fields.ffmpegsource_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('ssm') ? 'has-error' : '' }}">
                <label for="ssm">{{ trans('cruds.channel.fields.ssm') }}</label>
                <input type="text" id="ssm" name="ssm" class="form-control" value="{{ old('ssm', isset($channel) ? $channel->ssm : '') }}">
                @if($errors->has('ssm'))
                    <em class="invalid-feedback">
                        {{ $errors->first('ssm') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.channel.fields.ssm_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('imc') ? 'has-error' : '' }}">
                <label for="imc">{{ trans('cruds.channel.fields.imc') }}</label>
                <input type="text" id="imc" name="imc" class="form-control" value="{{ old('imc', isset($channel) ? $channel->imc : '') }}">
                @if($errors->has('imc'))
                    <em class="invalid-feedback">
                        {{ $errors->first('imc') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.channel.fields.imc_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('port') ? 'has-error' : '' }}">
                <label for="port">{{ trans('cruds.channel.fields.port') }}</label>
                <input type="text" id="port" name="port" class="form-control" value="{{ old('port', isset($channel) ? $channel->port : '') }}">
                @if($errors->has('port'))
                    <em class="invalid-feedback">
                        {{ $errors->first('port') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.channel.fields.port_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('pid') ? 'has-error' : '' }}">
                <label for="pid">{{ trans('cruds.channel.fields.pid') }}</label>
                <input type="text" id="pid" name="pid" class="form-control" value="{{ old('pid', isset($channel) ? $channel->pid : '') }}">
                @if($errors->has('pid'))
                    <em class="invalid-feedback">
                        {{ $errors->first('pid') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.channel.fields.pid_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('source_stream_guid') ? 'has-error' : '' }}">
                <label for="source_stream_guid">{{ trans('cruds.channel.fields.source_stream_guid') }}</label>
                <input type="text" id="source_stream_guid" name="source_stream_guid" class="form-control" value="{{ old('source_stream_guid', isset($channel) ? $channel->source_stream_guid : '') }}">
                @if($errors->has('source_stream_guid'))
                    <em class="invalid-feedback">
                        {{ $errors->first('source_stream_guid') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.channel.fields.source_stream_guid_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('valid_as_of') ? 'has-error' : '' }}">
                <label for="valid_as_of">{{ trans('cruds.channel.fields.valid_as_of') }}</label>
                <input type="text" id="valid_as_of" name="valid_as_of" class="form-control datetime" value="{{ old('valid_as_of', isset($channel) ? $channel->valid_as_of : '') }}">
                @if($errors->has('valid_as_of'))
                    <em class="invalid-feedback">
                        {{ $errors->first('valid_as_of') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.channel.fields.valid_as_of_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection