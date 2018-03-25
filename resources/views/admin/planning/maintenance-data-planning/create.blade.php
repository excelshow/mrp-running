@extends('layouts.admin.app')

@section('title', 'Create Maintenance Data Planning | ')

@section('content')
<section class="content-header">
  <h1>
    Maintenance Data Planning
  </h1>
  <ol class="breadcrumb">
    <li>
      <a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Home</a>
    </li>
    <li>
      <a href="{{ url('planning/maintenance-data-planning') }}"><i class="fa fa-cubes"></i> Maintenance Data Planning</a>
    </li>
    <li class="active">Create Maintenance Data Planning</li>
  </ol>
</section>
<section class="content">
  <div class="create-manufacturing-container">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Create Maintenance Data Planning</h3>
          </div>
          <div class="box-body">

            <form class="form-horizontal" action="" method="post">
              {{csrf_field()}}
              
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="col-md-12">
                      <div class="clearfix">
                        <label class="control-label pull-left">Work Order</label>  
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
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 clearfix">
                  <a class="btn btn-primary btn-pamindo pull-right" href="{{ url('planning/maintenance-data-planning') }}">
                    Save
                  </a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection

@push('styles')
@endpush

@push('scripts')
@endpush


