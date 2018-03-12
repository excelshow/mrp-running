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
            @if(access('product','create') == true)
              <li><a href="{{ route('product.create')}}"><div class='pull-right'><button type='button' class='btn btn-primary btn-md'>Create New Product</button></div></a></li>
            @endif
            </ul>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

          <table id="roles" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Kode Product</th>
              <th>Nama Product</th>
              <th>Kategori Produk</th>
              <th>Stok Produk</th>
              <th>Harga Produk /pcs</th>
              <th>Status</th> 
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @if (session()->has('message'))
              <td>XSM501</td>
              <td>Hp Samsung</td>
              <td>Gadjet</td>

              <td>
                @if (session()->has('stock'))
              62
              @else
              50
              @endif
            </td>
              <td>Rp. 50.000</td>
              <td>Aktif</td>
              <td><a href="/product/addstock" class="btn btn-warning">Tambah Stok</a> <a class="btn btn-primary">Edit</a> <a class="btn btn-danger">Delete</a></td>
              @endif
            </tbody>
            <tfoot>
            <tr>
              <th>Kode Product</th>
              <th>Nama Product</th>
              <th>Kategori Produk</th>
              <th>Stok Produk</th>
              <th>Harga Produk /pcs</th>
              <th>Status</th> 
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
@include('admin.users.scripts')
@include('admin.forms.delete-modal')
@endpush
