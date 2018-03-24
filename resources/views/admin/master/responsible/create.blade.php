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
                        <label class="control-label pull-left">Employee ID</label>  
                      </div>
                      <input type="text" name="product" class="form-control">  
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <div class="clearfix">
                        <label class="control-label pull-left">Employee Name</label>  
                      </div>
                      <input type="text" name="product" class="form-control">  
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="col-md-5">
                      <label class="control-label">Start Time</label>
                      <input type="time" name="source" class="form-control">  
                    </div>
                    <div class="col-md-6">
                      <label class="control-label">Finish Time</label>
                      <input type="time" class="form-control">
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
      @include('admin.operations.components.modal-add-responsible')
    </div>
  </div>
</section>

@endsection

@push('styles')
  <link rel="stylesheet" type="text/css" href="{{ mix('css/create-manufacturing.css') }}">
@endpush

@push('scripts')
@endpush


