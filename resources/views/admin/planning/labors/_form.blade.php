<div class="row">
    <div class="col-sm-6">

        <div class="form-group {{ $errors->has('employee_id') ? ' has-error' : '' }}">
            <label>Employee ID</label>
            {!! Form::number('employee_id', null, [
                'class'=>'form-control',
                'required'=>'required',
            ]) !!}
            @if($errors->has('employee_id'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('employee_id') }}</span>            
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

    </div>
</div>

<div class="row">
	<div class="col-md-12">
		<hr>
        <center>
            <a href="{{ url('planning/labors') }}" class="btn btn-default">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Back') }}
            </a>
            <button type="submit" class="btn btn-danger btn-save">
                <i class="fa fa-save" aria-hidden="true"></i> {{ __('Save') }}
            </button>    
        </center>
        
	</div>
</div>