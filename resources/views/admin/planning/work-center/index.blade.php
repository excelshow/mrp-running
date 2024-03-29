@extends('layouts.admin.app')

@section('title', 'Work Center | ')

@section('content')
<section class="content-header">
  <h1>
    Work Center
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Work Center</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header clearfix">
          <a href="{{ url('planning/work-center/create') }}" class="btn btn-primary pull-right">Create</a>
        </div>
        <div class="box-body">
          <table id="datatable-general" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Work Center Number</th>
              <th>Machine ID</th>
              <th>Asset Number</th>
              <th>Queue Time</th>
              <th>Setup Time</th>
              <th>Execution Time</th>
              <th>Utilization</th>
              <th>Created At</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($works as $item)
                <tr>
                  <td>{{ $item->number }}</td>
                  <td>{{ $item->machine_id }}</td>
                  <td>{{ $item->asset_number }}</td>
                  <td>{{ $item->queue_time }}</td>
                  <td>{{ $item->setup_time }}</td>
                  <td>{{ $item->execution_time }}</td>
                  <td>{{ $item->utilization }}</td>
                  <td>{{ $item->created_at }}</td>
                  <td>
                    <a href="{{ route('planning.work-center.edit', $item->id) }}" class="btn btn-xs btn-info"">
                      <span class="glyphicon glyphicon-edit"></span> Edit
                    </a>
                    <button class="btn btn-xs btn-danger remove-item" data-id="{{ encrypt($item->id) }}">
                      <span class="glyphicon glyphicon-trash"></span> Delete
                    </button>
                  </td>
                </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr>
              <th>Work Center Number</th>
              <th>Machine ID</th>
              <th>Asset Number</th>
              <th>Queue Time</th>
              <th>Setup Time</th>
              <th>Execution Time</th>
              <th>Utilization</th>
              <th>Created At</th>
              <th>Action</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
  </div>
</section>

@endsection

@push('scripts')
  <script type="text/javascript">
    jQuery( document ).ready(function() {
      var data = $( '#datatable-general' ).DataTable({
      });

      $(document).on('click', '.remove-item', function(e){
        e.preventDefault();
        var id = $(this).attr('data-id');
        swal({
          title: "Are you sure?",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Yes, Remove",
          cancelButtonText: "No, Cancel",
          closeOnConfirm: false,
          closeOnCancel: false },
          function(isConfirm){
          if (isConfirm) {
            $.ajax({
              type: "DELETE",
              url: "{{ url('planning/work-center') }}"+"/"+id,
              data: {_token: "{{ csrf_token() }}"},
              cache: false,
              success: function(data){
                swal({
                  title: "Data Removed!",
                  type: "success"
                }, function(){
                  window.location.href = '{{ url()->current() }}';
                });
              }
            });
          } else {
            swal("Cancel", "Remove data canceled", "error");
          }
        });
      });
    });
  </script>
@endpush
