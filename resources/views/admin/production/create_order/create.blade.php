@extends('layouts.admin.app')

@section('title', 'Dashboard | ')

@section('content')
<section class="content-header">
  <h1>
    Work Order
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Users</li>
  </ol>
</section>
<section class="content">

  @include('admin.partials.errors')
  
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
            
        <div class="box-header with-border">
          <h3 class="box-title">Work Order</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" action="@yield('url', '/work-order/store')" method="post">
         {{csrf_field()}}
          @section('editMethod')
            @show
            <div class="box-body">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="col-md-12"> 
                    <label for="name">Part Next Higher Assy<span class="required">*</span></label>
                    <select name="id_part_next_higher_assy" class="form-control">
                    @foreach( $routenha as $key => $routenhas )
                      <option value="{{ $key }}">{{ $routenhas }}</option>
                    @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12">  
                    <label for="name">Part Number<span class="required">*</span></label>
                    <input type="text" name="part_number" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12"> 
                    <label for="name">Next Higher Assy <span class="required">*</span></label>
                    <input type="text" class="form-control" name="next_higher_assy">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12"> 
                    <label for="name">Revisi Number<span class="required">*</span></label>
                    <input type="text" class="form-control" data-validation="number" name="revisi_number">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12"> 
                    <label for="name">Part ID <span class="required">*</span></label>
                    <select name="part_id" class="form-control">
                    </select>
                  </div>
                </div>
                <div class="form-group ">
                  <div class="col-md-6 "> 
                    <label for="name">Estimated Start Date<span class="required">*</span></label>
                    <input type="date" class="form-control" name="estimated_start_date">
                  </div>
                  <div class="col-md-6">
                    <label for="name">Estimated Complation Date<span class="required">*</span></label>
                    <input type="date" class="form-control" name="estimated_complation_date">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12"> 
                    <label for="name">Work Order Status<span class="required">*</span></label>
                    <select  name="work_order_status" class="form-control">
                      <option value="">Silahkan Pilih</option>
                      <option value="CRT">Create WO</option>
                      <option value="RLS">Release WO</option>
                      <option value="PRT">Print WO</option>
                      <option value="OCF">Order Confirmation</option>
                      <option value="CLS">Closed WO</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="col-md-12"> 
                    <label for="name">Part Serial Number <span class="required">*</span></label>
                    <input type="text" class="form-control" name="revisi_number">
                  </div>
                </div>
                <div class="form-group ">
                  <div class="col-md-8 "> 
                    <label for="name">Part Name <span class="required">*</span></label>
                    <input type="text" class="form-control" name="part_name">
                  </div>
                  <div class="col-md-4">
                  <label for="name">Unit of Measure <span class="required">*</span></label>
                    <select name="unit_of_measure" class="form-control">
                      <option value="kg">Kg</option>
                      <option value="m">Meter</option>
                    </select>
                  </div>
                </div>
                <div class="form-group ">
                  <div class="col-md-12"> 
                    <label for="name">Shop<span class="required">*</span></label>
                    <input type="text" class="form-control" name="shop">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12"> 
                    <label for="name">Shop Destination <span class="required">*</span></label>
                    <input type="text" class="form-control" name="shop_destination">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12"> 
                    <label for="name">Qty Work Order<span class="required">*</span></label>
                    <input type="text" class="form-control" name="shop_destination">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12"> 
                    <label for="name">Customer Code<span class="required">*</span></label>
                    <input type="text" class="form-control" name="customer_code">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12"> 
                    <label for="name">Work Order Type<span class="required">*</span></label>
                    <select name="work_order_type" class="form-control">
                      <option value="ZM01">Assembly</option>
                      <option value="ZP01">Manufacturing</option>
                      <option value="ZR01">Tooling</option>
                      <option value="ZT01">Rework</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12"> 
                    <label for="name">Nomor Sales Kontrak<span class="required">*</span></label>
                    <select name="nomor_sales_kontrak" class="form-control">
                   @foreach ($salescontract as $item)
                      <option value="{{$item->contract_number}}" {{trim($__env->yieldContent('nomor_sales_kontrak')) == $item->contract_number ? "selected" : ""}}>{{$item->contract_number}}</option>
                  @endforeach   
                    </select>
                  </div>
                </div>
              </div>
            </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{url('/work-order')}}" class="btn btn-danger">Back</a>
              </div>
           </div>
        </form>
      </div>
      
    </div>
  </div>
</section>

@endsection