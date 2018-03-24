@extends('layouts.admin.app')

@section('title', 'Create Bill of Material | ')

@section('content')
<section class="content-header">
  <h1>
    Bill of Material
  </h1>
  <ol class="breadcrumb">
    <li>
      <a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Home</a>
    </li>
    <li>
      <a href="{{ url('manufacturing') }}"><i class="fa fa-cubes"></i> Bill of Material</a>
    </li>
    <li class="active">Create Bill of Material</li>
  </ol>
</section>
<section class="content">
  <div class="create-manufacturing-container">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Create Bill of Material</h3>
          </div>
          <div class="box-body">

            <form class="form-horizontal" action="" method="post">
              {{csrf_field()}}
              
              <div class="row">
                <div class="col-md-6">
                   <div class="form-group">
                    <div class="col-md-12">
                      <div class="clearfix">
                        <label class="control-label pull-left">Product Code</label>  
                      </div>
                      <input type="text" name="product" class="form-control">  
                    </div>
                  </div>
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
                      <label class="control-label">Minimum Quantity</label>
                      <input type="text" name="minimum-quantity" class="form-control">  
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label">Maksimum Quantity</label>
                      <input type="text" name="maximum-quantity" class="form-control">  
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label">Quantity Multiple</label>
                      <input type="text" name="quantity-multiple" class="form-control">  
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="col-md-5">
                      <label class="control-label">Lead Time</label>
                      <input type="text" name="source" class="form-control">  
                    </div>
                    <div class="col-md-6">
                      <label class="control-label">Lead Time</label>
                      <select class="form-control">
                        <option>Day(S) to Purchase</option>
                      </select>
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
      @include('admin.manufacturing.components.modal-add-product')
      @include('admin.manufacturing.components.modal-add-bill-of-material')
      @include('admin.manufacturing.components.modal-add-responsible')
    </div>
  </div>
</section>

@endsection

@push('styles')
  <link rel="stylesheet" type="text/css" href="{{ mix('css/create-manufacturing.css') }}">
@endpush

@push('scripts')
@endpush


