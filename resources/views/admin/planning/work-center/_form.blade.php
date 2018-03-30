<div class="row">
    <div class="col-sm-6">

        <div class="form-group {{ $errors->has('number') ? ' has-error' : '' }}">
            <label>Work Center Number</label>
            {!! Form::number('number', null, [
                'class'=>'form-control',
                'required'=>'required',
            ]) !!}
            @if($errors->has('number'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('number') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('machine_id') ? ' has-error' : '' }}">
            <label>Machine</label>
            {!! Form::select('machine_id', [
                '' => ''
                ] + App\MasterMachine::pluck('name','id')->all(), null, ['class'=>'form-control']); !!}
            @if($errors->has('machine_id'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('machine_id') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('asset_number') ? ' has-error' : '' }}">
            <label>Asset Number</label>
            {!! Form::number('asset_number', null, [
                'class'=>'form-control',
                'required'=>'required',
            ]) !!}
            @if($errors->has('asset_number'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('asset_number') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
            <label>Description</label>
            {!! Form::textarea('description', null, [
                'class'=>'form-control',
                'rows'=>'3',
            ]) !!}
            @if($errors->has('description'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('description') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('category') ? ' has-error' : '' }}">
            <label>Category</label>
            {!! Form::text('category', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('category'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('category') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('location') ? ' has-error' : '' }}">
            <label>Location</label>
            {!! Form::text('location', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('location'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('location') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('utilization') ? ' has-error' : '' }}">
            <label>Utilization</label>
            {!! Form::text('utilization', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('utilization'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('utilization') }}</span>            
            @endif
        </div>

    </div>

    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('total_shift') ? ' has-error' : '' }}">
            <label>Total Shift</label>
            {!! Form::number('total_shift', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('total_shift'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('total_shift') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('queue_time') ? ' has-error' : '' }}">
            <label>Queue Time</label>
            {!! Form::number('queue_time', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('queue_time'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('queue_time') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('setup_time') ? ' has-error' : '' }}">
            <label>Setup Time</label>
            {!! Form::number('setup_time', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('setup_time'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('setup_time') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('execution_time') ? ' has-error' : '' }}">
            <label>Execution Time</label>
            {!! Form::number('execution_time', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('execution_time'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('execution_time') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('capacity_time') ? ' has-error' : '' }}">
            <label>Capacity Time</label>
            {!! Form::number('capacity_time', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('capacity_time'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('capacity_time') }}</span>            
            @endif
        </div>
        
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('start_time_1') ? ' has-error' : '' }}">
            <label>Start Time 1</label>
            {!! Form::date('start_time_1', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('start_time_1'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('start_time_1') }}</span>            
            @endif
        </div>
        <div class="form-group {{ $errors->has('stop_time_1') ? ' has-error' : '' }}">
            <label>Stop Time 1</label>
            {!! Form::date('stop_time_1', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('stop_time_1'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('stop_time_1') }}</span>            
            @endif
        </div>
        <div class="form-group {{ $errors->has('brake_time_1') ? ' has-error' : '' }}">
            <label>Brake Time 1</label>
            {!! Form::number('brake_time_1', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('brake_time_1'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('brake_time_1') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('start_time_2') ? ' has-error' : '' }}">
            <label>Start Time 2</label>
            {!! Form::date('start_time_2', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('start_time_2'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('start_time_2') }}</span>            
            @endif
        </div>
        <div class="form-group {{ $errors->has('stop_time_2') ? ' has-error' : '' }}">
            <label>Stop Time 2</label>
            {!! Form::date('stop_time_2', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('stop_time_2'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('stop_time_2') }}</span>            
            @endif
        </div>
        <div class="form-group {{ $errors->has('brake_time_2') ? ' has-error' : '' }}">
            <label>Brake Time 2</label>
            {!! Form::number('brake_time_2', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('brake_time_2'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('brake_time_2') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('start_time_3') ? ' has-error' : '' }}">
            <label>Start Time 3</label>
            {!! Form::date('start_time_3', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('start_time_3'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('start_time_3') }}</span>            
            @endif
        </div>
        <div class="form-group {{ $errors->has('stop_time_3') ? ' has-error' : '' }}">
            <label>Stop Time 3</label>
            {!! Form::date('stop_time_3', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('stop_time_3'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('stop_time_3') }}</span>            
            @endif
        </div>
        <div class="form-group {{ $errors->has('brake_time_3') ? ' has-error' : '' }}">
            <label>Brake Time 3</label>
            {!! Form::number('brake_time_3', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('brake_time_3'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('brake_time_3') }}</span>            
            @endif
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('total_machine') ? ' has-error' : '' }}">
            <label>Total Machine</label>
            {!! Form::number('total_machine', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('total_machine'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('total_machine') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('total_labor') ? ' has-error' : '' }}">
            <label>Total Labor</label>
            {!! Form::number('total_labor', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('total_labor'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('total_labor') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('processing') ? ' has-error' : '' }}">
            <label>Processing</label>
            {!! Form::text('processing', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('processing'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('processing') }}</span>            
            @endif
        </div>
    </div>
</div>

<div class="row">
	<div class="col-md-12">
		<hr>
        <center>
            <a href="{{ url('planning/machines') }}" class="btn btn-default">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Back') }}
            </a>
            <button type="submit" class="btn btn-danger btn-save">
                <i class="fa fa-save" aria-hidden="true"></i> {{ __('Save') }}
            </button>    
        </center>
        
	</div>
</div>