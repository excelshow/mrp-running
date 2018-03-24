@extends('layouts.admin.app')

@section('title', 'Dashboard | ')

@section('content')
<section class="content-header">
      <h1>
        Produk 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Produk</li>
      </ol>
    </section>
<section class="content">
  
  @include('admin.partials.message')

  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Produk</h3>
          <ul class="nav navbar-right panel_toolbox">
              <li><a href="{{ route('product.create')}}"><div class='pull-right'><button type='button' class='btn btn-primary btn-md'>Create New Product</button></div></a></li>

            </ul>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="col-xs-12">
          <table id="roles" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Product</th>
              <th>Sales Price</th>
              <th>Cost</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @if (session()->has('message'))
              <td>XSM501</td>
              <td>Rp 500.000</td>
              <td>Rp 300.000</td>
              <td><a class="btn btn-primary">Edit</a> <a class="btn btn-danger">Delete</a></td>
              @endif
            </tbody>
          </table>
        </div>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
  </div>
</section>

@endsection

@push('scripts')
@include('admin.users.scripts')
@include('admin.forms.delete-modal')
@endpush
