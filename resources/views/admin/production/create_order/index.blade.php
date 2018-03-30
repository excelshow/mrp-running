@extends('layouts.admin.app')

@section('title', 'Dashboard | ')

@section('content')
<section class="content-header">
      <h1>
        Admin List 
        <small>All User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Users</li>
      </ol>
    </section>
<section class="content">

<div class="alert alert-success" style="display:none" id="message">

</div>

  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Users</h3>
          <ul class="nav navbar-right panel_toolbox">

             <li><a class='create-modal' href="{{route('work-order.create')}}"><div class='pull-right'><button type='button' class='btn btn-primary btn-md'>Create New Work Order</button></div></a></li>
  
            </ul>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

        <table class="table table-borderless" id="work-order">
        <thead>
          <tr>
            <th class="text-center">Work Order Number</th>
            <th class="text-center">Created At</th> 
            <th class="text-center">Updated At</th> 
            <th class="text-center">Actions</th>
          </tr>
        </thead>
      </table>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
  </div>
  
@endsection
@push('scripts')

<script type="text/javascript">
  jQuery( document ).ready(function() {
    var data = $( '#work-order' ).DataTable({
      processing: true,
      serverSide: true,
      ajax: "{!! route( 'work-order.getdata' ) !!}",
      columns: [
      { data: 'id', name: 'id'},
      { data: 'created_at', name: 'created_at'},
      { data: 'updated_at', name: 'updated_at'},
      { data: 'action', name: 'action', class: 'text-center', searchable: false, orderable: false }
      ]
    });
  });
</script>
  <script type="text/javascript">
    jQuery( document ).ready(function() {
      $(document).on('click', '.remove-item', function(e){
        console.log('test');
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
              type: "post",
              url: "{{ url('work-order/delete') }}"+"/"+id,
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
@include('admin.forms.delete-modal')
@endpush
