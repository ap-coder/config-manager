@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.channel.title') }}
    </div>

    <div class="card-body">
        <div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.channel.fields.source_name') }}
                        </th>
                        <td>
                            {{ $channel->source_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.channel.fields.channelid') }}
                        </th>
                        <td>
                            {{ $channel->channelid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.channel.fields.env') }}
                        </th>
                        <td>
                            {{ $channel->env }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.channel.fields.source_ip') }}
                        </th>
                        <td>
                            {{ $channel->source_ip }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.channel.fields.udp') }}
                        </th>
                        <td>
                            {{ $channel->udp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.channel.fields.ffmpegsource') }}
                        </th>
                        <td>
                            {{ $channel->ffmpegsource }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.channel.fields.ssm') }}
                        </th>
                        <td>
                            {{ $channel->ssm }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.channel.fields.imc') }}
                        </th>
                        <td>
                            {{ $channel->imc }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.channel.fields.port') }}
                        </th>
                        <td>
                            {{ $channel->port }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.channel.fields.pid') }}
                        </th>
                        <td>
                            {{ $channel->pid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.channel.fields.source_stream_guid') }}
                        </th>
                        <td>
                            {{ $channel->source_stream_guid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.channel.fields.valid_as_of') }}
                        </th>
                        <td>
                            {{ $channel->valid_as_of }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                Back
            </a>
        </div>
    </div>
</div>
@endsection