@extends('layouts.admin.app')

@section('title', 'Manufacturing Operations | ')

@section('content')

  <section class="content-header">
    <h1>
      Operations
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Operations</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-lg-12 col-xs-12">
        <div class="small-box bg-aqua min">
          <div class="box-menu" style="padding: 20px; text-align: center;">
            <h1 style="font-weight: bold;">Manufacturing Orders</h1>
            <div class="icon">
              <i class="fa fa-file-image-o"></i>
            </div>  
          </div>
          
          <a href="{{ url('manufacturing/operations/manufacturing-orders') }}" class="small-box-footer">Enter <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-12 col-xs-12">
        <div class="small-box bg-green min">
          <div class="box-menu" style="padding: 20px; text-align: center;">
            <h1 style="font-weight: bold;">Unbuild Orders</h1>
            <div class="icon">
              <i class="fa fa-smile-o"></i>
            </div>
          </div>
          <a href="{{ url('manufacturing/operations/unbuild-orders') }}" class="small-box-footer">Enter <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-12 col-xs-12">
        <div class="small-box bg-yellow min">
          <div class="box-menu" style="padding: 20px; text-align: center;">
            <h1 style="font-weight: bold;">Scrap Orders</h1>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
          <a href="{{ url('manufacturing/operations/scrap-orders') }}" class="small-box-footer">Enter <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

    </div>
  </section>

@endsection

@push('styles')
@endpush

@push('scripts')
  <script type="text/javascript">
    $(document).ready(function() {
      $('#datatable-manufacturing').DataTable();
    });
@endpush
