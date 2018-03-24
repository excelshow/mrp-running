@extends('layouts.admin.app')

@section('title', 'Scrap Orders | ')

@section('content')
<section class="content-header">
  <h1>
    Scrap Orders
  </h1>
  <ol class="breadcrumb">
    <li>
      <a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Home</a>
    </li>
    <li>
      <a href="{{ url('operations/manufacturing') }}"><i class="fa fa-cubes"></i> Scrap Orders</a>
    </li>
    <li class="active">Create Scrap Orders</li>
  </ol>
</section>
<section class="content">
  <div class="create-manufacturing-container">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Scrap Orders</h3>
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
                      <label class="control-label">Quantity</label>
                      <input type="text" name="quantity" class="form-control">  
                    </div>
                  </div>

                </div>

                <div class="col-md-6">

                  <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label">Source Document</label>
                      <input type="text" name="manufacturing_orders" class="form-control">  
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label">Expected Date</label>
                      <input type="date" name="expected_date" class="form-control">  
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
    </div>
  </div>
</section>

@endsection

@push('styles')
  <link rel="stylesheet" type="text/css" href="{{ mix('css/create-manufacturing.css') }}">
@endpush

@push('scripts')
@endpush


