@extends('layouts.admin.app')

@section('title', 'Edit Manufacturing Bill of Material Single Part | ')

@section('content')
<section class="content-header">
  <h1>
    Edit Manufacturing Bill of Material Single Part
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Edit Manufacturing Bill of Material Single Part</li>
  </ol>
</section>
<section class="content">
  <div class="row">
   <div class="col-md-12">
     <div class="box">
      <div class="box-header clearfix">
        <h4>Edit</h4>
      </div>
      <div class="box-body">
        {!! Form::model($material, ['route' => ['engineering.m-bom.single-parts.update', encrypt($material->id)],'method' =>'put','role'=>'form','files' => true])!!}
        {{ csrf_field() }}
        @include('admin.engineering.m-bom-single-parts._form')
        {!! Form::close() !!} 
      </div>
       
     </div>
   </div>  
 </div>
</section>

@endsection
