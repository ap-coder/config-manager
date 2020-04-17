@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.csi.title') }}
    </div>

    <div class="card-body">
        <div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.csi.fields.protocol') }}
                        </th>
                        <td>
                            {{ $csi->protocol }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.csi.fields.move_path') }}
                        </th>
                        <td>
                            {{ $csi->move_path }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.csi.fields.channel') }}
                        </th>
                        <td>
                            {{ $csi->channel->source_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.csi.fields.channel_server') }}
                        </th>
                        <td>
                            {{ $csi->channel_server->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.csi.fields.use_dev_channels') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled {{ $csi->use_dev_channels ? "checked" : "" }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.csi.fields.use_beta_channels') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled {{ $csi->use_beta_channels ? "checked" : "" }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.csi.fields.use_qa_channels') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled {{ $csi->use_qa_channels ? "checked" : "" }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.csi.fields.use_production_channels') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled {{ $csi->use_production_channels ? "checked" : "" }}>
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