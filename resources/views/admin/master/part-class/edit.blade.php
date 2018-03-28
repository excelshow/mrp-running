@extends('layouts.admin.app')

@section('title', 'Edit Part Class | ')

@section('content')
<section class="content-header">
  <h1>
    Edit Part Class
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Edit Part Class</li>
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
        {!! Form::model($part, ['route' => ['master.reference.part-class.update', encrypt($part->id)],'method' =>'put','role'=>'form','files' => true])!!}
        {{ csrf_field() }}
        @include('admin.master.part-class._form')
        {!! Form::close() !!} 
      </div>
       
     </div>
   </div>  
 </div>
</section>

@endsection
