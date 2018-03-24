@extends('layouts.admin.app')

@section('title', 'Create Manufacturing | ')

@section('content')
<section class="content-header">
  <h1>
    Manufacturing
  </h1>
  <ol class="breadcrumb">
    <li>
      <a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Home</a>
    </li>
    <li>
      <a href="{{ url('manufacturing') }}"><i class="fa fa-cubes"></i> Manufacturing</a>
    </li>
    <li class="active">Create Manufacturing</li>
  </ol>
</section>
<section class="content">
  <div class="create-manufacturing-container">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Create Manufacturing</h3>
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
                      <label class="control-label">Quantity To Produce</label>
                      <input type="text" name="quantity-produce" class="form-control">  
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-12">
                      <div class="clearfix">
                        <label class="control-label pull-left">Bill of Materials</label>  
                        <div class="pull-right btn-xs btn btn-default">
                          <i class="fa fa-plus"></i> Add Bill of Material
                        </div>
                      </div>
                      <input type="text" name="bill-of-material" class="form-control">  
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label">Deadline</label>
                      <input type="date" name="deadline" class="form-control">  
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <div class="clearfix">
                        <label class="control-label pull-left">Responsible</label>  
                        <div class="pull-right btn-xs btn btn-default">
                          <i class="fa fa-plus"></i> Add Responsible
                        </div>
                      </div>
                      <input type="text" name="responsible" class="form-control">  
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label">Source</label>
                      <input type="text" name="source" class="form-control">  
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


            <div class="row">
              <div class="col-md-12">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#consumed_product" data-toggle="tab" aria-expanded="true">Consumed Materials</a></li>
                    <li class=""><a href="#finished_product" data-toggle="tab" aria-expanded="false">Finished Products</a></li>
                    <li class=""><a href="#miscellaneous" data-toggle="tab" aria-expanded="false">Miscellaneous</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="consumed_product">
                      Empty Consumed Materials
                    </div>
                    <div class="tab-pane" id="finished_product">
                      Empty Finished Products
                    </div>
                    <div class="tab-pane" id="miscellaneous">
                      Empty Miscellaneous
                    </div>
                  </div>
                </div>
              </div>
            </div>
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


