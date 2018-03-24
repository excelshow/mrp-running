@extends('layouts.admin.app')

@section('title', 'Unbuild Orders | ')

@section('content')
<section class="content-header">
  <h1>
    Unbuild Orders
  </h1>
  <ol class="breadcrumb">
    <li>
      <a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Home</a>
    </li>
    <li>
      <a href="{{ url('operations/manufacturing') }}"><i class="fa fa-cubes"></i> Unbuild Orders</a>
    </li>
    <li class="active">Create Unbuild Orders</li>
  </ol>
</section>
<section class="content">
  <div class="create-manufacturing-container">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Unbuild Orders</h3>
          </div>
          <div class="box-body">

            <form class="form-horizontal" action="" method="post">
              {{csrf_field()}}
              
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="col-md-12">
                      <div class="clearfix">
                        <label class="control-label pull-left">Product</label>  
                        <div class="pull-right btn-xs btn btn-default" data-toggle="modal" data-target="#modal-add-product" data-backdrop="static" data-keyboard="false">
                          <i class="fa fa-plus"></i> Add Product
                        </div>
                      </div>
                      <input type="text" name="product" class="form-control">  
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-12">
                      <div class="clearfix">
                        <label class="control-label pull-left">Bill of Materials</label>  
                        <div class="pull-right btn-xs btn btn-default"  data-toggle="modal" data-target="#modal-add-bill-of-material" data-backdrop="static" data-keyboard="false">
                          <i class="fa fa-plus"></i> Add Bill of Material
                        </div>
                      </div>
                      <input type="text" name="bill-of-material" class="form-control">  
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label">Quantity</label>
                      <input type="text" name="quantity" class="form-control">  
                    </div>
                  </div>

                </div>

                <div class="col-md-6">

                  <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label">Manufacturing Orders</label>
                      <input type="text" name="manufacturing_orders" class="form-control">  
                    </div>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-12 clearfix">
                  <div class="btn btn-primary btn-pamindo pull-right">
                    Save
                  </div>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>

    <div class="modal-container">
      @include('admin.operations.components.modal-add-product')
      @include('admin.operations.components.modal-add-bill-of-material')
    </div>
  </div>
</section>

@endsection

@push('styles')
  <link rel="stylesheet" type="text/css" href="{{ mix('css/create-manufacturing.css') }}">
@endpush

@push('scripts')
@endpush


