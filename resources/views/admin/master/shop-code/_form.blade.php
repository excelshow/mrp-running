<div class="row">
    <div class="col-sm-6">

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

        <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
            <label>Description</label>
            {!! Form::textarea('description', null, [
                'class'=>'form-control',
                'required'=>'required',
                'rows'=>'3',
            ]) !!}
            @if($errors->has('description'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('description') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('status_code') ? ' has-error' : '' }}">
            <label>Status Code</label>
            {!! Form::text('status_code', null, [
                'class'=>'form-control',
                'required'=>'required',
                'placeholder'=>'Example: SC, CS, etc..',
            ]) !!}
            @if($errors->has('status_code'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('status_code') }}</span>            
            @endif
        </div>

    </div>
</div>

<div class="row">
	<div class="col-md-12">
		<hr>
        <center>
            <a href="{{ url('master/reference/shop-code') }}" class="btn btn-default">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Back') }}
            </a>
            <button type="submit" class="btn btn-danger btn-save">
                <i class="fa fa-save" aria-hidden="true"></i> {{ __('Save') }}
            </button>    
        </center>
        
	</div>
</div>