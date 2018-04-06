@extends('layouts.admin.app')

@section('title', 'Master Materials Approval | ')

@section('content')
<section class="content-header">
  <h1>
    Master Materials Approval
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Master Materials Approval</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header clearfix">
          <a href="{{ url('engineering/master-materials/maintenance-data/create') }}" class="btn btn-primary pull-right">Create</a>
        </div>
        <div class="box-body">
          <table id="datatable-general" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Material Number</th>
              <th>Material Name</th>
              <th>Material ID</th>
              <th>Approved</th>
              <th>Updated At</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($materials as $item)
                <tr>
                  <td>{{ $item->material_number }}</td>
                  <td>{{ $item->material_name }}</td>
                  <td>{{ $item->material_id }}</td>
                  <td>
                    @php
                      $label = '';
                      if ($item->is_approved) {
                        $label = 'success';
                      } else {
                        $label = 'danger';
                      }

                    @endphp
                    <label class="label label-{{ $label }}">{{ $item->is_approved ? 'Approved' : 'Not Approved' }}</label>
                  </td>
                  <td>{{ $item->updated_at }}</td>
                  <td>
                    <a href="{{ route('engineering.master-materials.approval.edit', $item->id) }}" class="btn btn-xs btn-info"">
                      <span class="glyphicon glyphicon-edit"></span> Approval
                    </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr>
              <th>Material Number</th>
              <th>Material Name</th>
              <th>Material ID</th>
              <th>Approved</th>
              <th>Updated At</th>
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
              url: "{{ url('engineering/master-materials/maintenance-data') }}"+"/"+id,
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
