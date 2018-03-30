<div class="row">
    <div class="col-sm-6">

        <div class="form-group {{ $errors->has('number') ? ' has-error' : '' }}">
            <label>Machine Number</label>
            {!! Form::number('number', null, [
                'class'=>'form-control',
                'required'=>'required',
            ]) !!}
            @if($errors->has('number'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('number') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
            <label>Name</label>
            {!! Form::text('name', null, [
                'class'=>'form-control',
                'required'=>'required',
            ]) !!}
            @if($errors->has('name'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('name') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('total_machine') ? ' has-error' : '' }}">
            <label>Total Machine</label>
            {!! Form::number('total_machine', null, [
                'class'=>'form-control',
                'required'=>'required',
            ]) !!}
            @if($errors->has('total_machine'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('total_machine') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('total_shift') ? ' has-error' : '' }}">
            <label>Total Shift</label>
            {!! Form::number('total_shift', null, [
                'class'=>'form-control',
                'required'=>'required',
            ]) !!}
            @if($errors->has('total_shift'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('total_shift') }}</span>            
            @endif
        </div>

    </div>
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('employee_leader_id') ? ' has-error' : '' }}">
            <label>Employee Leader</label>
            {!! Form::select('employee_leader_id', [
                '' => ''
                ] + App\MasterLabor::pluck('name','id')->all(), null, ['class'=>'form-control']); !!}
            @if($errors->has('employee_leader_id'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('employee_leader_id') }}</span>            
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