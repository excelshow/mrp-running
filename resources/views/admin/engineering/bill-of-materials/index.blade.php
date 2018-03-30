@extends('layouts.admin.app')

@section('title', 'Bill of Materials | ')

@section('content')
<section class="content-header">
  <h1>
    Bill of Materials
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Bill of Materials</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header clearfix">
          <a href="{{ url('engineering/bill-of-materials/maintenance-data/create') }}" class="btn btn-primary pull-right">Create</a>
        </div>
        <div class="box-body">
          <table id="datatable-general" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Master Material ID</th>
              <th>Barcode</th>
              <th>Part Level</th>
              <th>Part Number</th>
              <th>Part Name</th>
              <th>Created At</th>
              <th>Updated At</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($materials as $item)
                <tr>
                  <td>{{ $item->master_material_id }}</td>
                  <td>
                    @php
                      echo DNS1D::getBarcodeHTML($item->id, "C39");
                    @endphp
                  </td>
                  <td>{{ $item->part_level }}</td>
                  <td>{{ $item->part_number }}</td>
                  <td>{{ $item->part_name }}</td>
                  <td>{{ $item->created_at }}</td>
                  <td>{{ $item->updated_at }}</td>
                  <td>
                    <a href="{{ route('engineering.bill-of-materials.maintenance-data.edit', $item->id) }}" class="btn btn-info"">
                      <span class="glyphicon glyphicon-edit"></span> Edit
                    </a>
                    <button class="btn btn-danger remove-item" data-id="{{ encrypt($item->id) }}">
                      <span class="glyphicon glyphicon-trash"></span> Delete
                    </button>
                  </td>
                </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr>
              <th>Master Material ID</th>
              <th>Barcode</th>
              <th>Part Level</th>
              <th>Part Number</th>
              <th>Part Name</th>
              <th>Created At</th>
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
        responsive: true,
        bPaginate: true,
        lengthMenu: [25, 50, 100, 500, 1000],
        dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
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
              url: "{{ url('engineering/bill-of-materials/maintenance-data') }}"+"/"+id,
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
