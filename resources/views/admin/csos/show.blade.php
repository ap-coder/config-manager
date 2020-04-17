@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.cso.title') }}
    </div>

    <div class="card-body">
        <div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.cso.fields.channel_server_input_source') }}
                        </th>
                        <td>
                            {{ $cso->channel_server_input_source->protocol ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cso.fields.use_channel_server_localhost') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled {{ $cso->use_channel_server_localhost ? "checked" : "" }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cso.fields.use_default_a') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled {{ $cso->use_default_a ? "checked" : "" }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cso.fields.host_a') }}
                        </th>
                        <td>
                            {{ $cso->host_a }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cso.fields.host_a_port') }}
                        </th>
                        <td>
                            {{ $cso->host_a_port }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cso.fields.use_default_b') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled {{ $cso->use_default_b ? "checked" : "" }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cso.fields.host_b') }}
                        </th>
                        <td>
                            {{ $cso->host_b }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cso.fields.host_b_port') }}
                        </th>
                        <td>
                            {{ $cso->host_b_port }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cso.fields.use_aggragation_for_a') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled {{ $cso->use_aggragation_for_a ? "checked" : "" }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cso.fields.use_aggragation_for_b') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled {{ $cso->use_aggragation_for_b ? "checked" : "" }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cso.fields.use_sync_server_for_a') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled {{ $cso->use_sync_server_for_a ? "checked" : "" }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cso.fields.select_sync_server_a') }}
                        </th>
                        <td>
                            {{ $cso->select_sync_server_a->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cso.fields.use_sync_server_for_b') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled {{ $cso->use_sync_server_for_b ? "checked" : "" }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cso.fields.channel_server') }}
                        </th>
                        <td>
                            {{ $cso->channel_server->name ?? '' }}
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