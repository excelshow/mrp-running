@extends('layouts.admin.app')

@section('title', 'Inventory Reporting | ')

@section('content')

  <section class="content-header">
    <h1>
      Inventory Reporting
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Inventory Reporting</li>
    </ol>
  </section>

  <section class="content">
    
    <div class="row">
      <div class="col-lg-12 col-xs-12">
        <div class="small-box bg-aqua min">
          <div class="box-menu" style="padding: 20px; text-align: center;">
            <h1 style="font-weight: bold;">Inventory</h1>
            <div class="icon">
              <i class="fa fa-file-image-o"></i>
            </div>  
          </div>
          
          <a href="{{ url('inventory/reporting/inventory') }}" class="small-box-footer">Enter <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12 col-xs-12">
        <div class="small-box bg-aqua min">
          <div class="box-menu" style="padding: 20px; text-align: center;">
            <h1 style="font-weight: bold;">Inventory Valuation</h1>
            <div class="icon">
              <i class="fa fa-file-image-o"></i>
            </div>  
          </div>
          
          <a href="{{ url('inventory/reporting/inventory-valuation') }}" class="small-box-footer">Enter <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12 col-xs-12">
        <div class="small-box bg-aqua min">
          <div class="box-menu" style="padding: 20px; text-align: center;">
            <h1 style="font-weight: bold;">Product Moves</h1>
            <div class="icon">
              <i class="fa fa-file-image-o"></i>
            </div>  
          </div>
          
          <a href="{{ url('inventory/reporting/product-moves') }}" class="small-box-footer">Enter <i class="fa fa-arrow-circle-right"></i></a>
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

