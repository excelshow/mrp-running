@extends('layouts.admin.app')

@section('title', 'Create Sales Document Type | ')

@section('content')
<section class="content-header">
  <h1>
    Create Sales Document Type
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Create Sales Document Type</li>
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
        {!! Form::open(['url' => 'master/reference/sales-document-type','files' => true]) !!}
        {{ csrf_field() }}
        @include('admin.master.sales-document-type._form')
        {!! Form::close() !!} 
      </div>
       
     </div>
   </div>  
 </div>
</section>

@endsection
