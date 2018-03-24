@extends('layouts.admin.app')

@section('title', 'Dashboard | ')

@section('content')
<section class="content-header">
      <h1>
        Bill of Material
        <small>All Role</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Roles</li>
      </ol>
    </section>
<section class="content">
  @include('admin.partials.message')
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Bill of Material</h3>
          <ul class="nav navbar-right panel_toolbox">
            @if(access('role','create') == true)
              <li><a href="{{ route('bom.create')}}"><div class='pull-right'><button type='button' class='btn btn-primary btn-md'>Create New</button></div></a></li>
            @endif
            </ul>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="bom" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Product Code</th>
              <th>Product Name</th>
              <th>Minimum Quantity</th>
              <th>Maximum Quantity</th>
              <th>Quantity Multiple</th>
              <th>Lead Time</th>
            </tr>
            </thead>
            <tbody>
              <tr>
                <td>OP0001</td>
                <td>Gear GX01</td>
                <td>1</td>
                <td>2</td>
                <td>1</td>
                <td>1 Day(s) to Purchas</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
  </div>
</section>

@endsection

@push('scripts')
@include('admin.users.scripts')

<script type="text/javascript">
  jQuery( document ).ready(function() {
    var data = $( '#roles' ).DataTable({
      processing: true,
      serverSide: true,
      ajax: "{!! route( 'role.getdata' ) !!}",
      columns: [
      { data: 'name', name: 'name'},
      { data: 'action', name: 'action', class: 'text-center', searchable: false, orderable: false }
      ]
    });
  });
</script>
@include('admin.forms.delete-modal')
@endpush
