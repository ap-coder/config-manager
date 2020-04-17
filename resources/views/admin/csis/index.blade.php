@extends('layouts.admin')
@section('content')
@can('csi_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.csis.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.csi.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.csi.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.csi.fields.protocol') }}
                        </th>
                        <th>
                            {{ trans('cruds.csi.fields.move_path') }}
                        </th>
                        <th>
                            {{ trans('cruds.csi.fields.channel') }}
                        </th>
                        <th>
                            {{ trans('cruds.channel.fields.channelid') }}
                        </th>
                        <th>
                            {{ trans('cruds.channel.fields.env') }}
                        </th>
                        <th>
                            {{ trans('cruds.channel.fields.ssm') }}
                        </th>
                        <th>
                            {{ trans('cruds.channel.fields.imc') }}
                        </th>
                        <th>
                            {{ trans('cruds.channel.fields.port') }}
                        </th>
                        <th>
                            {{ trans('cruds.channel.fields.pid') }}
                        </th>
                        <th>
                            {{ trans('cruds.csi.fields.channel_server') }}
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
                    @foreach($csis as $key => $csi)
                        <tr data-entry-id="{{ $csi->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $csi->protocol ?? '' }}
                            </td>
                            <td>
                                {{ $csi->move_path ?? '' }}
                            </td>
                            <td>
                                {{ $csi->channel->source_name ?? '' }}
                            </td>
                            <td>
                                {{ $csi->channel->channelid ?? '' }}
                            </td>
                            <td>
                                {{ $csi->channel->env ?? '' }}
                            </td>
                            <td>
                                {{ $csi->channel->ssm ?? '' }}
                            </td>
                            <td>
                                {{ $csi->channel->imc ?? '' }}
                            </td>
                            <td>
                                {{ $csi->channel->port ?? '' }}
                            </td>
                            <td>
                                {{ $csi->channel->pid ?? '' }}
                            </td>
                            <td>
                                {{ $csi->channel_server->name ?? '' }}
                            </td>
                            <td>
                                {{ $csi->channel_server->host_url ?? '' }}
                            </td>
                            <td>
                                {{ $csi->channel_server->host_ip ?? '' }}
                            </td>
                            <td>
                                @can('csi_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.csis.show', $csi->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan
                                @can('csi_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.csis.edit', $csi->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan
                                @can('csi_delete')
                                    <form action="{{ route('admin.csis.destroy', $csi->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
    url: "{{ route('admin.csis.massDestroy') }}",
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
@can('csi_delete')
  dtButtons.push(deleteButton)
@endcan

  $('.datatable:not(.ajaxTable)').DataTable({ buttons: dtButtons })
})

</script>
@endsection