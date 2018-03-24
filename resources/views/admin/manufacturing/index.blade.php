@extends('layouts.admin.app')

@section('title', 'Manufacturing | ')

@section('content')

  <section class="content-header">
    <h1>
      Manufacturing
      <small>Manufacturing Order</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Manufacturing</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header clearfix">
            <h3 class="box-title pull-left">List Order</h3>
            <div class="pull-right">
              <a href="#">
                <div class="btn btn-primary">
                  Create New
                </div>
              </a>
            </div>
          </div>

          <div class="box-body">
            <table class="table table-borderless" id="datatable-manufacturing">
              <thead>
                <tr>
                  <th class="text-center">Name</th>
                  <th class="text-center">Quantity to Produce</th>
                  <th class="text-center">Bill of materials</th> 
                  <th class="text-center">Deadline</th> 
                  <th class="text-center">Responsible</th>
                  <th class="text-center">Actions</th>
                </tr>
              </thead>
              <tbody id="item">
              {{-- @foreach($manufactures as $item)
                <tr class="item{{$item->id}}">
                  <td>{{$item->name}}</td>
                  <td>{{$item->email}}</td>
                  <td>{{$item->role}}</td>
                  <td>{{$item->status}}</td>
                  <td>
                    <button class="edit-modal btn btn-info" data-info="{{$item->id}},{{$item->name}},{{$item->email}},{{$item->role}},{{$item->status}}">
                      <span class="glyphicon glyphicon-edit"></span> Edit
                    </button>
                    <button class="delete-modal btn btn-danger"
                      data-info="{{$item->id}},{{$item->name}},{{$item->email}},{{$item->role}},{{$item->status}}">
                      <span class="glyphicon glyphicon-trash"></span> Delete
                    </button></td>
                </tr>
              @endforeach --}}
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
      $('#datatable-manufacturing').DataTable();
    });
@endpush

