@extends('layouts.admin.app')

@section('title', 'Sales Contracts | ')

@section('content')
<section class="content-header">
  <h1>
    Sales Contracts
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Sales Contracts</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header clearfix">
          <a href="{{ url('sales/contracts/create') }}" class="btn btn-primary pull-right">Create</a>
        </div>
        <div class="box-body">
          <table id="datatable-general" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Sales Order</th>
              <th>ID Customer</th>
              <th>Contract Number</th>
              <th>Status</th>
              <th>Created At</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($contracts as $item)
                <tr>
                  <td>{{ $item->sales_order_id }}</td>
                  <td>{{ $item->customer_id }}</td>
                  <td>{{ $item->contract_number }}</td>
                  <td>{{ $item->status }}</td>
                  <td>{{ $item->created_at }}</td>
                  <td>
                    <a href="{{ route('sales.contracts.edit', $item->id) }}" class="btn btn-info"">
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
              <th>Sales Order</th>
              <th>ID Customer</th>
              <th>Contract Number</th>
              <th>Status</th>
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
              url: "{{ url('sales/contracts') }}"+"/"+id,
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
