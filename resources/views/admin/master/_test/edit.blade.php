@extends('layouts.app')

@section('title')
{{ __('Edit Event') }} - {{ $event->name }}
@stop

@section('content')
	<div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <h4 class="header-title m-t-0 m-b-30">{{ __('Edit Event') }}</h4>
				{!! Form::model($event, ['route' => ['admin.events.update', encrypt($event->id)],'method' =>'put','role'=>'form','files' => true])!!}
					{{ csrf_field() }}
					@include('pages.events._form')
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@stop



