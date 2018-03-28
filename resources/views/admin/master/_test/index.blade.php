@extends('layouts.app')

@section('title')
{{ __('Managing Events') }}
@stop

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <h4 class="header-title m-t-0 m-b-30">{{ __('Managing Events') }}</h4>
            <table class="table table-striped dt-responsive nowrap datatable-responsive" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th> {{ __('Name') }} </th>
                        <th> {{ __('Union') }} </th>
                        <th> {{ __('Client') }} </th>
                        <th> {{ __('Code') }} </th>
                        <th> {{ __('Date') }} </th>
                        <th> {{ __('Status') }} </th>
                        <th class="all"> {{ __('Actions') }} </th>
                    </tr>
                </thead>
                <tbody>
                	@foreach ($events as $event)
                        @include('pages.events._table-row')
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="btn-floating">
			<div class="zoom">
				<a href="{{ url('admin/events/create') }}" class="zoom-fab zoom-btn-large btn-floating-action">
					<i class="zmdi zmdi-plus"></i>
				</a>
			</div>	
		</div>
	</div>
</div>

@include('pages.events._modal-change-event')
@stop

@section('scripts')
<script type="text/javascript" src="{{ Helper::version('js/events.js') }}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		/* remove event */
		$(document).on('click', '.remove-event', function(e){
			e.preventDefault();
			var id = $(this).attr('data-id');
			swal({
				title: "Are you sure?",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Yes, Remove",
				cancelButtonText: "No, Cancel",
				closeOnConfirm: false,
				closeOnCancel: false },
				function(isConfirm){
				if (isConfirm) {
					$.ajax({
						type: "DELETE",
						url: "{{ url('admin/events') }}"+"/"+id,
						data: {_token: "{{ csrf_token() }}"},
						cache: false,
						success: function(data){
							swal({
								title: "Data Removed!",
								type: "success"
							}, function(){
								window.location.href = '{{ url()->current() }}';
							});
						}
					});
				} else {
					swal("Cancel", "Remove data canceled", "error");
				}
			});
		});
	});
</script>
@stop