@extends('layouts.admin')
@section('content')
@can('cso_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.csos.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.cso.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.cso.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.cso.fields.channel_server_input_source') }}
                        </th>
                        <th>
                            {{ trans('cruds.csi.fields.move_path') }}
                        </th>
                        <th>
                            {{ trans('cruds.csi.fields.use_dev_channels') }}
                        </th>
                        <th>
                            {{ trans('cruds.csi.fields.use_beta_channels') }}
                        </th>
                        <th>
                            {{ trans('cruds.csi.fields.use_qa_channels') }}
                        </th>
                        <th>
                            {{ trans('cruds.csi.fields.use_production_channels') }}
                        </th>
                        <th>
                            {{ trans('cruds.cso.fields.select_sync_server_a') }}
                        </th>
                        <th>
                            {{ trans('cruds.syncServer.fields.host_url') }}
                        </th>
                        <th>
                            {{ trans('cruds.syncServer.fields.host_ip') }}
                        </th>
                        <th>
                            {{ trans('cruds.cso.fields.channel_server') }}
                        </th>
                        <th>
                            {{ trans('cruds.channelServer.fields.host_url') }}
                        </th>
                        <th>
                            {{ trans('cruds.channelServer.fields.host_ip') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($csos as $key => $cso)
                        <tr data-entry-id="{{ $cso->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $cso->channel_server_input_source->protocol ?? '' }}
                            </td>
                            <td>
                                {{ $cso->channel_server_input_source->move_path ?? '' }}
                            </td>
                            <td>
                                {{ $cso->channel_server_input_source->use_dev_channels ? trans('global.yes') : trans('global.no') }}
                            </td>
                            <td>
                                {{ $cso->channel_server_input_source->use_beta_channels ? trans('global.yes') : trans('global.no') }}
                            </td>
                            <td>
                                {{ $cso->channel_server_input_source->use_qa_channels ? trans('global.yes') : trans('global.no') }}
                            </td>
                            <td>
                                {{ $cso->channel_server_input_source->use_production_channels ? trans('global.yes') : trans('global.no') }}
                            </td>
                            <td>
                                {{ $cso->select_sync_server_a->name ?? '' }}
                            </td>
                            <td>
                                {{ $cso->select_sync_server_a->host_url ?? '' }}
                            </td>
                            <td>
                                {{ $cso->select_sync_server_a->host_ip ?? '' }}
                            </td>
                            <td>
                                {{ $cso->channel_server->name ?? '' }}
                            </td>
                            <td>
                                {{ $cso->channel_server->host_url ?? '' }}
                            </td>
                            <td>
                                {{ $cso->channel_server->host_ip ?? '' }}
                            </td>
                            <td>
                                @can('cso_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.csos.show', $cso->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan
                                @can('cso_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.csos.edit', $cso->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan
                                @can('cso_delete')
                                    <form action="{{ route('admin.csos.destroy', $cso->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.csos.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('cso_delete')
  dtButtons.push(deleteButton)
@endcan

  $('.datatable:not(.ajaxTable)').DataTable({ buttons: dtButtons })
})

</script>
@endsection