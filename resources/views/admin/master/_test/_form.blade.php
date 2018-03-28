<div class="row">
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('user_id') ? ' has-error' : '' }}">
            {!! Form::select('user_id', [
                '' => ''
                ] + App\User::where('role','client')->pluck('first_name','id')->all(), null, ['class'=>'form-control']); !!}
            <label for="input-last-name">Client ID
                <span class="required">*</span>
            </label>
            <span class="help-block">Client ID</span>
            @if($errors->has('user_id'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('user_id') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
            <label>{{ __('Name') }}</label>
            {!! Form::text('name', null, [
                'class'=>'form-control',
                'required'=>'required',
                'placeholder'=> __('Enter your name'),
            ]) !!}
            @if($errors->has('name'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('name') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('union') ? ' has-error' : '' }}">
            <label>{{ __('Union') }}</label>
            {!! Form::text('union', null, [
                'class'=>'form-control',
                'required'=>'required',
                'placeholder'=> __('Enter your union'),
            ]) !!}
            @if($errors->has('union'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('union') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('branch') ? ' has-error' : '' }}">
            <label>{{ __('Branch') }}</label>
            {!! Form::text('branch', null, [
                'class'=>'form-control',
                'required'=>'required',
                'placeholder'=> __('Enter your branch'),
            ]) !!}
            @if($errors->has('branch'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('branch') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('notes') ? ' has-error' : '' }}">
            <label>{{ __('Notes') }}</label>
            {!! Form::textarea('notes', null, [
                'class'=>'form-control',
                'rows'=> '5',
                'placeholder'=> __('Enter your notes'),
            ]) !!}
            @if($errors->has('notes'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('notes') }}</span>            
            @endif
        </div>

    </div>
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('location') ? ' has-error' : '' }}">
            <label>{{ __('Location') }}</label>
            {!! Form::text('location', null, [
                'class'=>'form-control',
                'placeholder'=> __('Enter your location. example: building or etc'),
            ]) !!}
            @if($errors->has('location'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('location') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('geo_location') ? ' has-error' : '' }}">
            <label>{{ __('Geo Location') }}</label>
            {!! Form::text('geo_location', null, [
                'class'=>'form-control',
                'placeholder'=> __('Enter your geo location. example: maps url'),
            ]) !!}
            @if($errors->has('geo_location'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('geo_location') }}</span>            
            @endif
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('start') ? ' has-error' : '' }}">
                    <label>{{ __('Start Date') }}</label>
                    
                    <div class="input-group">
                        {!! Form::text('start', null, [
                            'class'=>'form-control datepicker',
                            'required'=>'required',
                            'placeholder'=> __('Enter your start date'),
                            'id' => 'input-start-date'
                        ]) !!}
                        <span class="input-group-addon bg-primary b-0 text-white" id="btn-input-start-date"><i class="ti-calendar"></i></span>
                    </div>
                    @if($errors->has('start'))
                        <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('start') }}</span>            
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('end') ? ' has-error' : '' }}">
                    <label>{{ __('End Date') }}</label>
                    <div class="input-group">
                        {!! Form::text('end', null, [
                            'class'=>'form-control datepicker',
                            'required'=>'required',
                            'placeholder'=> __('Enter your end date'),
                            'id' => 'input-end-date'
                        ]) !!}
                        <span class="input-group-addon bg-primary b-0 text-white" id="btn-input-end-date"><i class="ti-calendar"></i></span>
                    </div>
                    @if($errors->has('end'))
                        <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('end') }}</span>            
                    @endif
                </div>
            </div>    
        </div>
        

        @if(isset($event))
            <div class="form-group {{ $errors->has('code') ? ' has-error' : '' }}">
                <label>{{ __('Code') }}</label>
                {!! Form::number('code', null, [
                    'class'=>'form-control',
                    'required'=>'required',
                    'placeholder'=> __('Enter your code'),
                ]) !!}
                @if($errors->has('code'))
                    <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('code') }}</span>            
                @endif
            </div>

            <div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}">
                <label>{{ __('Status') }}</label>
                {!! Form::select('status', [
                    'upcoming' => 'Upcoming',
                    'planned' => 'Planned',
                    'active' => 'Active',
                    'completed' => 'Completed',
                    ], isset($event->status) ? $event->status : 'upcoming', ['class'=>'form-control', 'placeholder' => 'Status']); !!}
                @if($errors->has('status'))
                    <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('status') }}</span>            
                @endif
            </div>
        @endif        
    </div>
</div>
<div class="row">
	<div class="col-md-12">
		<hr>
        <center>
            <a href="{{ url('admin/events') }}" class="btn btn-default">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Back') }}
            </a>
            <button type="submit" class="btn btn-danger btn-save">
                <i class="fa fa-save" aria-hidden="true"></i> {{ __('Save') }}
            </button>    
        </center>
        
	</div>
</div>

@push('scripts')
    <script type="text/javascript">
        $('#input-start-date').pickadate({
            format: 'dd/mm/yyyy',
            formatSubmit: 'dd/mm/yyyy',
            hiddenName: true,
            selectYears: true,
            selectMonths: true,
            year: 2018
        })

        $('#btn-input-start-date').on('click', function(event) {
            var picker = $('#input-start-date').pickadate('picker');
            if (picker.get("open")) {
                picker.close();
            }
            else {
                picker.open();
            }
            event.stopPropagation();
        });

        $('#input-end-date').pickadate({
            format: 'dd/mm/yyyy',
            formatSubmit: 'dd/mm/yyyy',
            hiddenName: true,
            selectYears: true,
            selectMonths: true
        })

        $('#btn-input-end-date').on('click', function(event) {
            var picker = $('#input-end-date').pickadate('picker');
            if (picker.get("open")) {
                picker.close();
            }
            else {
                picker.open();
            }
            event.stopPropagation();
        });
    </script>
@endpush