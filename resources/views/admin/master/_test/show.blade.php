@extends('layouts.app')

@section('title')
	{{ $event->name }}
@stop

@section('styles')
	<link href="{{ mix('css/event-topics.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('content')
	@php
		$myRole = Event::getParticipantRole($event->slug, Auth::user()->id);
		$myParticipantId = Event::getParticipantId($event->slug, Auth::user()->id);
	@endphp
	
	<div class="event-details-container">
		
		{{-- counter --}}
    	<div class="row">
    		<div class="card-box m-0">
    			<div class="row">
	    		    {{-- <div class="col-lg-3 col-md-3 col-sm-3">
						<div class="box-counter">
							<a data-toggle="modal" href="#modal-list-headline">
								<div class="box-wrapper">
									<div class="header-box green">
										<i class="fa fa-circle" aria-hidden="true"></i> {{ __('Headlines') }} 
									</div>
						            <div class="counter-container">
						            	<div class="counter-label" data-plugin="counterup" id="total-headlines-dashboard"> {{ count($headlines) }} </div>
						            </div>	
								</div>
				            </a>
						</div>
	    		    </div>
	    		    <div class="col-lg-3 col-md-3 col-sm-3">
						<div class="box-counter">
							<a data-toggle="modal" href="#modal-list-topic">
								<div class="box-wrapper">
									<div class="header-box red">
										<i class="fa fa-circle" aria-hidden="true"></i> {{ __('Topics') }}
									</div>
						            <div class="counter-container">
						            	<div class="counter-label" data-plugin="counterup" id="total-topics-dashboard"> {{ count($subTopics) }} </div>
						            </div>
						        </div>
							</a>
						</div>
	    		    </div> --}}

	    		    <div class="col-lg-4 col-md-4 col-sm-4">
						<div class="box-counter">
							<a data-toggle="modal" href="#modal-list-topic">
								<div class="box-wrapper">
									<div class="header-box green">
										<i class="fa fa-circle" aria-hidden="true"></i> {{ __('Topics') }}
									</div>
						            <div class="counter-container">
						            	<div class="counter-label" data-plugin="counterup" id="total-topics-dashboard"> {{ count($topics) }} </div>
						            </div>
						        </div>
							</a>
						</div>
	    		    </div>

	    		    <div class="col-lg-4 col-md-4 col-sm-4">
						<div class="box-counter">
							<a data-toggle="modal" href="#modal-list-delegate">
								<div class="box-wrapper">
									<div class="header-box blue">
										<i class="fa fa-circle" aria-hidden="true"></i> {{ __('Delegates') }}
									</div>
						            <div class="counter-container">
						            	<div class="counter-label" data-plugin="counterup" id="total-participants-dashboard"> {{ count($participants) }} </div>
						            </div>
						        </div>
					        </a>
						</div>
	    		    </div>
        		    <div class="col-lg-4 col-md-4 col-sm-4">
    					<div class="box-counter">
    						<a data-toggle="modal" href="#modal-list-suggestion">
    							<div class="box-wrapper">
    								<div class="header-box grey">
    									<i class="fa fa-circle" aria-hidden="true"></i> {{ __('Suggestions') }}
    								</div>
    					            <div class="counter-container">
    					            	<div class="counter-label" data-plugin="counterup" id="total-suggestions-dashboard"> {{ count($suggestions) }} </div>
    					            </div>
    					        </div>
    				        </a>
    					</div>
        		    </div>
    			</div>
    		</div>
    	</div>
		
		{{-- headlines and topics --}}
    	<div class="row m-t-20">
    		<div class="card-box headline-list-box">

    			<div class="headlines-list-container hidden">
	    			<div class="overlay"></div>
	    			<ul class="headlines-list">
	    				@foreach($headlines as $headline)
		    				<li class="headline-item-container" data-headline-id={{ $headline->id }}>
		    					<div class="headline-item">
		    						@if ($myRole == 'admin' || $myRole == 'moderator' || $myRole == 'secretary')
			    						<div class="headline-item__move">
			    							<i class="fa fa-bars" aria-hidden="true"></i>
			    						</div>
		    						@endif
		    						@php
		    							$headlineStatus = '';
		    							if($headline->status == 'discussion') {
		    								$headlineStatus = 'green';
		    							} else if($headline->status == 'active') {
		    								$headlineStatus = 'blue';
		    							} else if($headline->status == 'open') {
		    								$headlineStatus = 'yellow';
		    							} else {
		    								$headlineStatus = 'yellow';
		    							}
		    						@endphp
		    						<div class="headline-item__title {{ $headlineStatus }} topic-item-wrap" data-topic-id="{{ $headline->id }}" data-topic-name="{{ $headline->name }}">
		    							<i class="fa fa-circle" aria-hidden="true"></i>
		    							{{ $headline->name }}
		    						</div>
		    						<div class="headline-item__suggestions">
		    							{{ count($headline->suggestions) }} {{ __('Suggestions') }}
		    						</div>
		    						<div class="headline-item__topics">
		    							<span class="label label-danger label-code">
		    								{{ $headline->code }}
		    							</span>
		    							<span class="label label-danger">
		    								<span class="headline-item-topics__counter">{{ count($headline->topics) }}</span> {{ __('Sub Topics') }}
		    							</span>
		    						</div>
		    						@if ($myRole == 'admin' || $myRole == 'moderator' || $myRole == 'secretary')
		    							<div class="headline-item__actions">
		    								<div class="dropdown pull-right">
		    								    <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
		    								        <i class="zmdi zmdi-more-vert"></i>
		    								    </a>
		    								    <ul class="dropdown-menu" role="menu">
		    								        <li>
		    								        	<a class="btn-create-topic" data-toggle="modal" href="#modal-create-topic" data-headline-id={{ $headline->id }} data-is-headline="0">
		    								        		{{ __('Add New Topic') }}
		    								        	</a>
		    								        </li>
		    								        <li class="divider"></li>
		    								        <li>
		    								        	<a href="{{ route('topics.edit', [$event->slug, $headline->id]) }}" data-headline-id="{{ $headline->id }}">
		    								        		{{ __('Edit Headline') }}
		    								        	</a>
		    								        </li>
		    								        <li>
		    								        	<a class="btn-remove-topic" data-toggle="modal" href="#modal-remove-topic" data-topic-id="{{ $headline->id }}" data-topic-name="{{ $headline->name }}">
		    								        		{{ __('Delete Headline') }}
		    								        	</a>
		    								        </li>
		    								    </ul>
		    								</div>
		    							</div>	
		    						@endif		    						
		    					</div>
		    												
		    					<ul class="topics-list">
		    						@foreach($headline->topics as $topic)
			    						<li class="topic-item">
			    							@if ($myRole == 'admin' || $myRole == 'moderator' || $myRole == 'secretary')
				    							<div class="topic-item__move">
				    								<i class="fa fa-bars" aria-hidden="true"></i>
				    							</div>
			    							@endif
			    							@php
			    								$topicStatus = '';
			    								if($topic->status == 'discussion') {
			    									$topicStatus = 'green';
			    								} else if($topic->status == 'active') {
			    									$topicStatus = 'blue';
			    								} else if($topic->status == 'open') {
			    									$topicStatus = 'yellow';
			    								} else {
			    									$topicStatus = 'yellow';
			    								}
			    							@endphp
			    							<div class="topic-item__title {{ $topicStatus }} topic-item-wrap" data-topic-id="{{ $topic->id }}" data-topic-name="{{ $topic->name }}">
			    								<i class="fa fa-circle" aria-hidden="true"></i>
			    									{{ $topic->name }}
			    							</div>
			    							
			    							<div class="topic-item__suggestions">
			    								{{ count($topic->suggestions) }} {{ __('Suggestions') }}
			    							</div>
			    							<div class="topic-item__code">
			    								<span class="label label-danger label-code">
			    									{{ $topic->code }}
			    								</span>
			    							</div>

											@if ($myRole == 'admin' || $myRole == 'moderator' || $myRole == 'secretary')
			    								<div class="topic-item__actions">
			    									<div class="dropdown pull-right">
			    									    <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
			    									        <i class="zmdi zmdi-more-vert"></i>
			    									    </a>
			    									    <ul class="dropdown-menu" role="menu">
			    									        <li>
			    									        	<a href="{{ route('topics.edit', [$event->slug, $topic->id]) }}">
			    									        		{{ __('Edit Topic') }}
			    									        	</a>
			    									        </li>
			    									        <li class="divider"></li>
			    									        <li>
			    									        	<a class="btn-remove-topic" data-toggle="modal" href="#modal-remove-topic" data-topic-id="{{ $topic->id }}" data-topic-name="{{ $topic->name }}">
			    									        		{{ __('Delete Topic') }}
			    									        	</a>
			    									        </li>
			    									    </ul>
			    									</div>
			    								</div>
			    							@endif
			    						</li>
			    					@endforeach
		    					</ul>
		    				</li>
		    			@endforeach
	    			</ul>	
                    <div id="message" class="suggestions-container">
                    	<div class="suggestions-options">
                    		<a class="btn btn-icon btn-circle btn-circle-lg btn-danger waves-effect waves-light trigger-message-close pull-right">
                    			<i class="ti-close"></i>
                    		</a>	
                    	</div>
                        <div class="header">
                        </div>
                        <div class="suggestions-table-container">
	                        <div class="row">
	                            <div class="col-md-12">

	                                <ul class="nav nav-tabs nav-justified">
	                                    <li role="presentation" class="active">
	                                        <a href="#all-suggestions" id="all-suggestions-tab" role="tab" data-toggle="tab" aria-controls="all-suggestions" aria-expanded="true">
												{{ __('All Suggestions') }}
	                                        </a>
	                                    </li>
	                                    <li role="presentation">
	                                        <a href="#my-suggestions" role="tab" id="my-suggestions-tab" data-toggle="tab" aria-controls="my-suggestions">
	                                        	{{ __('My Suggestions') }}
	                                        </a>
	                                    </li>
	                                </ul>
	                                <div class="tab-content">
	                                    <div role="tabpanel" class="tab-pane fade in active" id="all-suggestions" aria-labelledby="all-suggestions-tab">
								            <table class="table table-striped dt-responsive nowrap suggestions-table" id="datatable-all-suggestions" cellspacing="0" width="100%">
								                <thead>
								                    <tr>
								                        <th> {{ __('Suggestions') }} </th>
								                    </tr>
								                </thead>
								            </table>
	                                    </div>
	                                    <div role="tabpanel" class="tab-pane fade" id="my-suggestions" aria-labelledby="my-suggestions-tab">
											<table class="table table-striped dt-responsive nowrap suggestions-table" id="datatable-my-suggestions" cellspacing="0" width="100%">
											    <thead>
											        <tr>
											            <th> {{ __('Suggestions') }} </th>
											        </tr>
											    </thead>
											</table>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
                        </div>
                        <div class="suggestions-actions">
                        	<div class="row">
                    			<div class="pull-right">
                    				<a class="btn btn-icon btn-circle btn-circle-lg btn-primary waves-effect waves-light" data-toggle="modal" href="#modal-create-suggestion">
                    					<i class="ti-plus"></i>
                    				</a>
                    			</div>
                        	</div>
                        </div>
                    </div>
                </div>    
    			<div class="list-headline-empty hidden">
    				<h3>{{ __('No Topics Available') }}</h3>
    			</div>

    		</div>
    	</div>
		
		{{-- create new headline --}}
		@if ($myRole == 'admin' || $myRole == 'moderator' || $myRole == 'secretary')
	    	<div class="row">
	    		<div class="col-sm-12">
	    			<div class="btn-floating">
	    				<div class="zoom">
	    					<a data-toggle="modal" href="#modal-create-topic" class="zoom-fab zoom-btn-large btn-floating-action btn-create-topic" data-is-headline="1">
	    						<i class="zmdi zmdi-plus"></i>
	    					</a>
	    				</div>	
	    			</div>
	    		</div>
	    	</div>
	    @endif
		
		<div class="row">
			<div class="sortable-changes-confirmation hidden" id="sortable-changes-confirmation">
				<div class="action-options">
					<div class="btn btn-default" id="btn-discard-changes-sortable">
						{{ __('DISCARD') }}
					</div>
					<div class="btn btn-success" id="btn-save-changes-sortable">
						{{ __('SAVE') }}
					</div>

				</div>
			</div>
		</div>
	    

	</div>
	
	{{-- @include('pages.events.components.modal-create-headline')
	@include('pages.events.components.modal-remove-headline') --}}
	@include('pages.events.components.modal-create-topic')
	@include('pages.events.components.modal-remove-topic')
	@include('pages.events.components.modal-create-suggestion-manual')

	@include('pages.events.components.modal-list-headline')
	@include('pages.events.components.modal-list-topic')
	@include('pages.events.components.modal-list-delegate')
	@include('pages.events.components.modal-list-suggestion')

@stop

@push('scripts')
	<script type="text/javascript">
		var myRole = <?php echo json_encode($myRole); ?>;
		var myEvent = <?php echo json_encode($event); ?>;
		var topics = <?php echo json_encode($topics); ?>;
		var suggestions = <?php echo json_encode($suggestions); ?>;
		var myParticipantId = <?php echo json_encode($myParticipantId); ?>;
		var participants = <?php echo json_encode($participants); ?>;
		var users = <?php echo json_encode($users); ?>;
		var myLanguage = <?php echo json_encode(Auth::user()->language); ?>;
		window.myMeet = <?php echo json_encode([
	        'user' => $user,
	        'event' => $event,
	    ]); ?>
	</script>
	<script type="text/javascript" src="{{ Helper::version('assets/vendor/js/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
	<script type="text/javascript" src="{{ mix('js/helper.js') }}"></script>
	<script type="text/javascript" src="{{ mix('js/event-topics.js') }}"></script>
	<script type="text/javascript" src="{{ mix('js/create-topics.js') }}"></script>
@endpush
