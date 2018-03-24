@extends('layouts.admin.app')

@section('title', 'Manufacturing Orders | ')

@section('content')

  <section class="content-header">
    <h1>
      Manufacturing Orders
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Manufacturing Orders</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header clearfix">
            <h3 class="box-title pull-left">List Order</h3>
            <div class="pull-right">
              <a href="{{ url('manufacturing/operations/manufacturing-orders/create') }}">
                <div class="btn btn-primary">
                  Create New
                </div>
              </a>
            </div>
          </div>

          <div class="box-body">
            <table class="table table-borderless" id="datatable-manufacturing-orders">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Quantity to Produce</th>
                  <th>Deadline</th> 
                  <th>Responsible</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody id="item">
                <tr>
                  <td>Motor</td>
                  <td>1000</td>
                  <td>12-12-2018</td>
                  <td>Maulana</td>
                  <td>
                    <button class="btn btn-info"">
                      <span class="glyphicon glyphicon-edit"></span> Edit
                    </button>
                    <button class="btn btn-danger">
                      <span class="glyphicon glyphicon-trash"></span> Delete
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>Mobil</td>
                  <td>1000</td>
                  <td>12-12-2018</td>
                  <td>Maulana</td>
                  <td>
                    <button class="btn btn-info"">
                      <span class="glyphicon glyphicon-edit"></span> Edit
                    </button>
                    <button class="btn btn-danger">
                      <span class="glyphicon glyphicon-trash"></span> Delete
                    </button>
                  </td>
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
      $('#datatable-manufacturing-orders').DataTable();
    });
@endpush

