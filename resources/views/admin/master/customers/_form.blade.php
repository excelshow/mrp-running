<div class="row">
    <div class="col-sm-6">

        <div class="form-group {{ $errors->has('number') ? ' has-error' : '' }}">
            <label>Customer Number</label>
            {!! Form::text('number', null, [
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
        
        <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
            <label>Address</label>
            {!! Form::textarea('address', null, [
                'class'=>'form-control',
                'required'=>'required',
                'rows'=>'3',
            ]) !!}
            @if($errors->has('address'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('address') }}</span>            
            @endif
        </div>

    </div>
    <div class="col-sm-6">

        <div class="form-group {{ $errors->has('fax') ? ' has-error' : '' }}">
            <label>Fax</label>
            {!! Form::text('fax', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('fax'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('fax') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
            <label>Phone Number</label>
            {!! Form::text('phone', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('phone'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('phone') }}</span>            
            @endif
        </div>
            
    </div>
</div>

<hr>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('city') ? ' has-error' : '' }}">
            <label>City</label>
            {!! Form::text('city', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('city'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('city') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('country') ? ' has-error' : '' }}">
            <label>Country</label>
            {!! Form::text('country', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('country'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('country') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('zip') ? ' has-error' : '' }}">
            <label>Zip Code</label>
            {!! Form::text('zip', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('zip'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('zip') }}</span>            
            @endif
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('product_type') ? ' has-error' : '' }}">
            <label>Product Type</label>
            {!! Form::select('product_type', [
                'mobile' => 'Mobile',
                'motor' => 'Motor',
                'part-component' => 'Part Component'
                ] , null, ['class'=>'form-control']); !!}
            @if($errors->has('product_type'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('product_type') }}</span>            
            @endif
        </div>
    </div>
</div>

<div class="row">
	<div class="col-md-12">
		<hr>
        <center>
            <a href="{{ url('master/reference/customers') }}" class="btn btn-default">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Back') }}
            </a>
            <button type="submit" class="btn btn-danger btn-save">
                <i class="fa fa-save" aria-hidden="true"></i> {{ __('Save') }}
            </button>    
        </center>
        
	</div>
</div>