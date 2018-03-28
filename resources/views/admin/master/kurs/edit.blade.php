@extends('layouts.admin.app')

@section('title', 'Edit Kurs | ')

@section('content')
<section class="content-header">
  <h1>
    Edit Kurs
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Edit Kurs</li>
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
        {!! Form::model($kur, ['route' => ['master.reference.kurs.update', encrypt($kur->id)],'method' =>'put','role'=>'form','files' => true])!!}
        {{ csrf_field() }}
        @include('admin.master.kurs._form')
        {!! Form::close() !!} 
      </div>
       
     </div>
   </div>  
 </div>
</section>

@endsection
