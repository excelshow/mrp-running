@extends('layouts.admin.app')

@section('title', 'Unbuild Orders | ')

@section('content')

  <section class="content-header">
    <h1>
      Unbuild Orders
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Unbuild Orders</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header clearfix">
            <h3 class="box-title pull-left">List Order</h3>
            <div class="pull-right">
              <a href="{{ url('manufacturing/operations/unbuild-orders/create') }}">
                <div class="btn btn-primary">
                  Create New
                </div>
              </a>
            </div>
          </div>

          <div class="box-body">
            <table class="table table-borderless" id="datatable-unbuild-orders">
              <thead>
                <tr>
                  <th>Reference</th>
                  <th>Product</th>
                  <th>Bill of Material</th> 
                  <th>Quantity</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody id="item">
                <tr>
                  <td>UB/001</td>
                  <td>Motor</td>
                  <td>Ban</td>
                  <td>145</td>
                  <td>Done</td>
                </tr>
              </tbody>
            </table>
          </div>

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
      $('#datatable-unbuild-orders').DataTable();
    });
  </script>
@endpush

