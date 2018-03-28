@extends('layouts.app')

@section('title')
{{ __('Create New Event') }}
@stop

@section('content')
    <div class="row">
         <div class="col-md-12">
             <div class="card-box">
                 <h4 class="header-title m-t-0 m-b-30">{{ __('Create New Event') }}</h4>
            	{!! Form::open(['url' => 'admin/events','files' => true, 'id'=>'form-create-event']) !!}
            		{{ csrf_field() }}
            		@include('pages.events._form')
            	{!! Form::close() !!}
            </div>
        </div>	
    </div>
	
@stop