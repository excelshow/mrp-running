<div class="row">
    <div class="col-sm-6">

        <div class="form-group {{ $errors->has('code') ? ' has-error' : '' }}">
            <label>Code Number</label>
            {!! Form::text('code', null, [
                'class'=>'form-control',
                'required'=>'required',
            ]) !!}
            @if($errors->has('code'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('code') }}</span>            
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

        <div class="form-group {{ $errors->has('classification') ? ' has-error' : '' }}">
            <label>Classification</label>
            {!! Form::text('classification', null, [
                'class'=>'form-control',
                'required'=>'required',
            ]) !!}
            @if($errors->has('classification'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('classification') }}</span>            
            @endif
        </div>

    </div>
</div>

<div class="row">
	<div class="col-md-12">
		<hr>
        <center>
            <a href="{{ url('master/reference/part-class') }}" class="btn btn-default">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Back') }}
            </a>
            <button type="submit" class="btn btn-danger btn-save">
                <i class="fa fa-save" aria-hidden="true"></i> {{ __('Save') }}
            </button>    
        </center>
        
	</div>
</div>