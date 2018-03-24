@extends('layouts.admin.app')

@section('title', 'Dashboard | ')

@section('content')
<section class="content-header">
      <h1>
        {{ucwords(Request::segment(1))}}
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
          <h3 class="box-title">{{ucwords(Request::segment(1))}}</h3>
          <ul class="nav navbar-right panel_toolbox">
            @if(access('role','create') == true)
              <li><a href="{{ route('routing.create')}}"><div class='pull-right'><button type='button' class='btn btn-primary btn-md'>Create New</button></div></a></li>
            @endif
            </ul>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="bom" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Routing Name</th>
              <th>Version</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              <tr>
                <td>Initial Route</td>
                <td>1</td>
                <td>
                      <button class="btn btn-primary">
                        <span class="fa fa-edit"></span>
                      </button>
                      <button class="btn btn-danger">
                        <span class="fa fa-trash"></span>
                      </button>
                </td>
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
