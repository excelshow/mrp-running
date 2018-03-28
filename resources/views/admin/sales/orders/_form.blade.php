<div class="row">
    <div class="col-sm-6">

        <div class="form-group {{ $errors->has('currency') ? ' has-error' : '' }}">
            <label>Currency</label>
            {!! Form::text('currency', null, [
                'class'=>'form-control',
                'required'=>'required',
            ]) !!}
            @if($errors->has('currency'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('currency') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('date') ? ' has-error' : '' }}">
            <label>Date</label>
            {!! Form::date('date', null, [
                'class'=>'form-control',
                'required'=>'required',
            ]) !!}
            @if($errors->has('date'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('date') }}</span>            
            @endif
        </div>

    </div>
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('sell') ? ' has-error' : '' }}">
            <label>Sell (Price)</label>
            {!! Form::number('sell', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('sell'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('sell') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('middle') ? ' has-error' : '' }}">
            <label>Middle (Price)</label>
            {!! Form::number('middle', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('middle'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('middle') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('buy') ? ' has-error' : '' }}">
            <label>Buy (Price)</label>
            {!! Form::number('buy', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('buy'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('buy') }}</span>            
            @endif
        </div>
            
    </div>
</div>

<div class="row">
	<div class="col-md-12">
		<hr>
        <center>
            <a href="{{ url('master/reference/kurs') }}" class="btn btn-default">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Back') }}
            </a>
            <button type="submit" class="btn btn-danger btn-save">
                <i class="fa fa-save" aria-hidden="true"></i> {{ __('Save') }}
            </button>    
        </center>
        
	</div>
</div>