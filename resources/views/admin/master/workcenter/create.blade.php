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
                        <label class="control-label pull-left">Work Center Name</label>  
                      </div>
                      <input type="text" name="product" class="form-control">  
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <div class="clearfix">
                        <label class="control-label pull-left">Code</label>  
                      </div>
                      <input type="text" name="product" class="form-control">  
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <div class="clearfix">
                        <label class="control-label pull-left">Working Hours</label>  
                      </div>
                      <select name="working-hours" class="form-control">
                        <option>Standard 40 Hours/Week</option>
                        <option>Standard 20 Hours/Week</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="col-md-5">
                      <label class="control-label">Time before prod.</label>
                      <input type="time" name="source" class="form-control">  
                    </div>
                    <div class="col-md-6">
                      <label class="control-label">Time after prod.</label>
                      <input type="time" class="form-control">
                    </div>
                  </div>                  
              </div>
               <div class="col-md-6">
                  <div class="form-group">
                    <div class="col-md-5">
                      <label class="control-label">Cost per hour.</label>
                      <input type="time" name="source" class="form-control">  
                    </div>
                    <div class="col-md-6">
                      <label class="control-label">Capacity</labe l>
                      <input type="number" class="form-control">
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
  </div>
</section>

@endsection

@push('styles')
  <link rel="stylesheet" type="text/css" href="{{ mix('css/create-manufacturing.css') }}">
@endpush

@push('scripts')
@endpush


