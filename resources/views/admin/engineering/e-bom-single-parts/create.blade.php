@extends('layouts.admin.app')

@section('title', 'Create Engineering Bill of Material Single Part | ')

@section('content')
<section class="content-header">
  <h1>
    Create Engineering Bill of Material Single Part
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Create Engineering Bill of Material Single Part</li>
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
        {!! Form::open(['url' => 'engineering/e-bom/single-parts','files' => true]) !!}
        {{ csrf_field() }}
        @include('admin.engineering.e-bom-single-parts._form')
        {!! Form::close() !!} 
      </div>
       
     </div>
   </div>  
 </div>
</section>

@endsection
