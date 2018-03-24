@extends('layouts.admin.app')
@section('title', ucwords(Request::segment(1)))
@section('content')
<section class="content-header">
  <h1>
    {{ucwords(Request::segment(1))}}
  </h1>
  <ol class="breadcrumb">
    <li>
      <a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Home</a>
    </li>
    <li>
      <a href="{{ url('manufacturing') }}"><i class="fa fa-cubes"></i>{{ucwords(Request::segment(1))}}</a>
    </li>
    <li class="active">{{ucwords(Request::segment(1))}}</li>
  </ol>
</section>
<section class="content">
  <div class="create-manufacturing-container">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">{{ucwords(Request::segment(1))}}</h3>
          </div>
          <div class="box-body">
          
              <div class="row">
                <div class="col-md-6">
                   <div class="form-group">
                    <div class="col-md-12">
                      <div class="clearfix">
                        <label class="control-label pull-left">Routing Name</label>  
                      </div>
                      <input type="text" name="product" class="form-control">  
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <div class="clearfix">
                        <label class="control-label pull-left">Version</label>  
                      </div>
                      <input type="text" name="product" class="form-control">  
                    </div>
                  </div>
                </div>
              
            </div>
            <form class="form-horizontal" action="{{route('workcenter.index')}}" method="get">
              {{csrf_field()}}
              <div class="row">
                <div class="col-md-12 clearfix">
                  <button type="submit" class="btn btn-primary btn-pamindo pull-right">
                   Save
                  </button>
                </div>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
    <div class="row">
       <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-body">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#work_center" data-toggle="tab" aria-expanded="true">Work Center Operation</a></li>
                <li ><a href="#tools" data-toggle="tab" aria-expanded="true">Tools</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="work_center">
                  <div class="row">
                    <div class="col-md-12">
                      <table class="table table-bordered table-striped">
                        <tr>
                          <th>Operation</th>
                          <th>Work Center</th>
                          <th>Duration</th>
                          <th>Action</th>
                        </tr>
                        <tr>
                          <td>Operation 1</td>
                          <td>Initial Operation</td>
                          <td>60 Hours</td>
                          <td><button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                        </tr>
                      </table>
                    <button data-target="#add-work-center" data-toggle="modal" class="btn btn-pamindo">add item</button>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tools">
                  <div class="row">
                    <div class="col-md-12">
                      <table class="table table-bordered table-striped">
                        <tr>
                          <th>Tools Name</th>
                          <th>Quantity</th>
                        </tr>
                        <tr>
                          <td>Grill Machine</td>
                          <td>1</td>
                        </tr>
                      </table>
                    <button data-target="#add-tools" data-toggle="modal" class="btn btn-pamindo">add item</button>
                  </div>
                </div>
              </div>
              </div>
            </div>
        </div>
      </div>
    </div>
     <div class="modal-container">
      @include('admin.master.routing.components.add-work-center')
      @include('admin.master.routing.components.add-tools')
    </div>
  </div>
</section>

@endsection

@push('styles')
  <link rel="stylesheet" type="text/css" href="{{ mix('css/create-manufacturing.css') }}">
@endpush

@push('scripts')
@endpush


