@extends('layouts.admin.app')

@section('title', 'Dashboard | ')

@section('content')
<section class="content-header">
  <h1>
    {{substr(Route::currentRoutename(),8)}} Produk
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Produk</li>
  </ol>
</section>
<section class="content">
  @include('admin.partials.errors')
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
            
        <div class="box-header with-border">
          <h3 class="box-title">{{substr(Route::currentRoutename(),8)}} Produk</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body">

        <form class="form-horizontal" action="@yield('url', '/product/store')" method="post">
         {{csrf_field()}}
          @section('editMethod')
            @show
            <div class="form-group">
            <div class="col-md-5"> 
              <label class="control-label" for="first-name">Kode Produk <span class="required">*</span></label>
              <input type="text" data-validation="required" name="name" class="form-control" placeholder="Name" value="XSM501">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-5"> 
              <label class="control-label" for="first-name">Nama Produk <span class="required">*</span></label>
              <input type="text" data-validation="required" name="name" class="form-control" placeholder="Name" value="Hp Samsung">
            </div>
          </div>
           <div class="form-group">
            <div class="col-md-5"> 
              <label for="name">Kategori<span class="required">*</span></label>
              <select class="form-control">
                  <option>Gadjet</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-3"> 
              <label for="name">Stok Produk</label>
              <input type="number" name="name" data-validation="required" required="required"  class="form-control" value="50">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3"> 
              <label for="name">Harga Produk</label>
              <input type="text" name="name" data-validation="required" required="required"  class="form-control" value="Rp. 50.000">
            </div>
          </div>
           <div class="form-group">
            <div class="col-md-5"> 
              <label for="name">Status<span class="required">*</span></label>
              <select name="name" class="form-control">
                <option>Aktif</option>
                <option>Tidak Aktif</option>
              </select>
            </div>
          </div>

          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <button type="submit" id="checkBtn" class="btn btn-primary">Submit</button>
              <a href="/product" class="btn btn-danger">Back</a>
            </div>
          </div>
        </form>
         
        </div>

      </div>
      
    </div>
  </div>
</section>

@endsection


@push('scripts')
  @include('admin.customer.scripts')
@endpush
