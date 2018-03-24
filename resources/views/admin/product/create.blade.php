@extends('layouts.admin.app')
@section('title', 'Dashboard | ')
@section('content')
<section class="content-header">
  <h1>
    {{substr(Route::currentRoutename(),8)}} Produk
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Produk</li>
  </ol>
</section>
<section class="content">
  @include('admin.partials.errors')
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
            
        <div class="box-header with-border">
          <h3 class="box-title">{{substr(Route::currentRoutename(),8)}} Produk</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body">

       
       
          @section('editMethod')
            @show
             <form class="form-horizontal" action="" method="post">
          {{csrf_field()}}
          <div class="row">
            <div class="col-md-12">

              <div class="form-group">
                <div class="col-md-6">
                  <label class="control-label">Product</label>
                  <input type="text" name="product_name" class="form-control">  
                </div>
                <div class="col-md-3">
                  <label class="control-label">Image</label>
                  <input type="file" name="product_name" class="form-control">  
                </div>
                <div class="col-md-3">
                  <img src="" class="img-responsive">
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <label>
                    <input type="checkbox">
                    Can be sold
                  </label>
                </div>
                <div class="col-md-12">
                  <label>
                    <input type="checkbox">
                    Can be purchased
                  </label>
                </div>
              </div>
            </div>
          </div>
        </form>

        <div class="row">
          <div class="col-md-12">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#general_information_tab" data-toggle="tab" aria-expanded="true">General Informations</a></li>
                <li class=""><a href="#sales_tab" data-toggle="tab" aria-expanded="false">Sales</a></li>
                <li class=""><a href="#inventory_tab" data-toggle="tab" aria-expanded="false">Inventory</a></li>
                <li class=""><a href="#notes_tab" data-toggle="tab" aria-expanded="false">Notes</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="general_information_tab">
                  <form class="form-horizontal" action="" method="post">
                    {{csrf_field()}}
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="col-md-12">
                            <label class="control-label">Product Type</label>
                            <input type="text" name="product_type" class="form-control">  
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-12">
                            <label class="control-label">Internal Reference</label>
                            <input type="text" name="internal_reference" class="form-control">  
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-12">
                            <label class="control-label">Barcode</label>
                            <input type="text" name="barcode" class="form-control">  
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-12">
                            <label class="control-label">Category</label>
                            <input type="text" name="product_category" class="form-control">  
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="col-md-12">
                            <label class="control-label">Sales Price</label>
                            <input type="text" name="sales_price" class="form-control">  
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-12">
                            <label class="control-label">Cost</label>
                            <input type="text" name="cost" class="form-control">  
                          </div>
                        </div>
                      </div>
                    </div>  
                  </form>

                </div>
                <div class="tab-pane" id="sales_tab">
                  Empty Sales
                </div>
                <div class="tab-pane" id="inventory_tab">
                  <form class="form-horizontal" action="" method="post">
                    {{csrf_field()}}
                    <div class="row">
                      <div class="col-md-6">
                        <h4>Operations</h4>
                        <div class="form-group">
                          <div class="col-md-12">
                            <label class="control-label">Routes</label>
                            <div class="form-group">
                              <div class="col-md-12">
                                <label>
                                  <input type="checkbox">
                                  Manufacture
                                </label>
                              </div>
                              <div class="col-md-12">
                                <label>
                                  <input type="checkbox">
                                  Make to Order
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-12">
                            <label class="control-label">Manufacturing Lead Time</label>
                            <input type="text" name="manufacturing_lead_time" class="form-control">  
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-12">
                            <label class="control-label">Customer Lead Time</label>
                            <input type="text" name="customer_lead_time" class="form-control">  
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <h4>Logistics</h4>
                        <div class="form-group">
                          <div class="col-md-12">
                            <label class="control-label">Weight (kg)</label>
                            <input type="text" name="routes" class="form-control">  
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-12">
                            <label class="control-label">Volume (m3)</label>
                            <input type="text" name="manufacturing_lead_time" class="form-control">  
                          </div>
                        </div>
                      </div>
                    </div>  
                  </form>
                </div>
                <div class="tab-pane" id="notes_tab">
                  <form class="form-horizontal" action="" method="post">
                    {{csrf_field()}}
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="col-md-12">
                            <label class="control-label">Description for Customers</label>
                            <textarea class="form-control" name="description_for_customers" rows="3" placeholder="this note will show up on sales orders"></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-12">
                            <label class="control-label">Description for Delivery Orders</label>
                            <textarea class="form-control" name="description_for_delivery_orders" rows="3" placeholder="this note will show up on delivery orders"></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-12">
                            <label class="control-label">Description for Internal Transfers</label>
                            <textarea class="form-control" name="description_for_internal_transfers" rows="3" placeholder="this note will show up on internal transfer orders (e.g. where to pick the product in the warehouse)"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="col-md-12">
                            <label class="control-label">Description for Receptions</label>
                            <textarea class="form-control" name="description_for_receptions" rows="3" placeholder="this note will show up on the receipt orders (e.g. where to store the product in the warehouse)"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>  
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      <form class="form-horizontal" action="@yield('url', '/product/store')" method="post">
          {{csrf_field()}}
        <div class="row">
          <div class="col-md-12 clearfix">
            <button type="submit" class="pull-right btn btn-info">Save</button>
          </div>
        </div>
      </form>
        </div>

      </div>
      
    </div>
  </div>
</section>

@endsection


@push('scripts')
  @include('admin.customer.scripts')
@endpush
