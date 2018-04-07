@extends('layouts.admin.app')

@section('title', 'Create Purchase Order | ')

@section('content')
<section class="content-header">
  <h1>
    Create Purchase Order
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Create Purchase Order</li>
  </ol>
</section>
<section class="content">
  <div class="row">
   <div class="col-md-12">
     <div class="box">
      <div class="box-header clearfix">
        <h4>Create</h4>
      </div>
      <div class="box-body">
        {!! Form::open(['url' => 'purchasing/purchase-orders','files' => true]) !!}
        {{ csrf_field() }}
        @include('admin.purchasing.purchase-orders._form')
        {!! Form::close() !!} 
      </div>
       
     </div>
   </div>  
 </div>
</section>

@endsection
