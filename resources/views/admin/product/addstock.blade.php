@extends('layouts.admin.app')

@section('title', 'Dashboard | ')

@section('content')
<section class="content-header">
  <h1>
    {{substr(Route::currentRoutename(),8)}} Produk Stok
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Produk Stok</li>
  </ol>
</section>
<section class="content">
  @include('admin.partials.errors')
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
            
        <div class="box-header with-border">
          <h3 class="box-title">{{substr(Route::currentRoutename(),8)}} Produk Stok</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body">

        <form class="form-vertical" action="{{ route('product.storestock')}}"  method="post">
         {{csrf_field()}}
          @section('editMethod')
            @show
            <div class="form-group">
            <div class="col-md-3"> 
              <label class="control-label" for="first-name">Kode Produk <span class="required">*</span></label>
              <input type="text" data-validation="required" name="name" class="form-control" placeholder="Name" value="XSM501">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3"> 
              <label class="control-label" for="first-name">Nama Produk <span class="required">*</span></label>
              <input type="text" data-validation="required" name="name" class="form-control" placeholder="Name" value="Hp Samsung">
            </div>
          </div>
           <div class="form-group">
            <div class="col-md-2"> 
              <label for="name">Kategori<span class="required">*</span></label>
              <select class="form-control">
                  <option>Gadjet</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-2"> 
              <label for="name">Stok Produk</label>
              <input type="number" name="name" data-validation="required" required="required"  class="form-control" id="stok_awal" value="50">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-2" > 
              <label for="name">Tambah Stok</label>
              <input type="number"  name="name" data-validation="required" required="required"  class="form-control" id="add_stok" value="">
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-2" style="float:right;"> 
              <label for="name">Total</label>
              <input type="number"  name="name" data-validation="required" required="required"  class="form-control" id="total" value="">
            </div>

        </div>
          <div class="form-group">
            <div class="col-md-2" style="float:left; margin-top:20px;"> 
             <form action="{{ route('product.storestock')}}" method="post">
               {{csrf_field()}}
              <input type="submit" class="btn btn-primary" >
            </form>
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
  @include('admin.product.scripts')
@endpush
