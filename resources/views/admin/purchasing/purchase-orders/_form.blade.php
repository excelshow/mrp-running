<div class="row">
    <div class="col-sm-6">

        <div class="form-group {{ $errors->has('order_number') ? ' has-error' : '' }}">
            <label>Order Number</label>
            {!! Form::text('order_number', null, [
                'class'=>'form-control',
                'required'=>'required',
            ]) !!}
            @if($errors->has('order_number'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('order_number') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('request_number') ? ' has-error' : '' }}">
            <label>Request Number</label>
            {!! Form::text('request_number', null, [
                'class'=>'form-control',
                'required'=>'required',
            ]) !!}
            @if($errors->has('request_number'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('request_number') }}</span>          
            @endif
        </div>

        <div class="form-group {{ $errors->has('unit_price') ? ' has-error' : '' }}">
            <label>Unit Price</label>
            {!! Form::text('unit_price', null, [
                'class'=>'form-control decimal-input',
            ]) !!}
            @if($errors->has('unit_price'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('unit_price') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('discount') ? ' has-error' : '' }}">
            <label>Discount</label>
            {!! Form::text('discount', null, [
                'class'=>'form-control decimal-input',
            ]) !!}
            @if($errors->has('discount'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('discount') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('tax') ? ' has-error' : '' }}">
            <label>Tax</label>
            {!! Form::text('tax', null, [
                'class'=>'form-control decimal-input',
            ]) !!}
            @if($errors->has('tax'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('tax') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('quantity_order') ? ' has-error' : '' }}">
            <label>Quantity Order</label>
            {!! Form::text('quantity_order', null, [
                'class'=>'form-control decimal-input',
            ]) !!}
            @if($errors->has('quantity_order'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('quantity_order') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('total_price') ? ' has-error' : '' }}">
            <label>Total Price</label>
            {!! Form::text('total_price', null, [
                'class'=>'form-control decimal-input',
            ]) !!}
            @if($errors->has('total_price'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('total_price') }}</span>            
            @endif
        </div>

    </div>
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('currency_id') ? ' has-error' : '' }}">
            <label>Currency</label>
            {!! Form::select('currency_id', [
                '' => ''
                ] + App\MasterKurs::pluck('currency','id')->all(), null, ['class'=>'form-control']); !!}
            @if($errors->has('currency_id'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('currency_id') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('order_date') ? ' has-error' : '' }}">
            <label>Order Date</label>
            {!! Form::date('order_date', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('order_date'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('order_date') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('delivery_date') ? ' has-error' : '' }}">
            <label>Delivery Date</label>
            {!! Form::text('delivery_date', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('delivery_date'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('delivery_date') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}">
            <label>Status</label>
            {!! Form::select('status', [
                'open' => 'Open', 'close' => 'Close', 'completed' => 'Completed'
                ] , null, ['class'=>'form-control']); !!}
            @if($errors->has('status'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('status') }}</span>            
            @endif
        </div>

    </div>
</div>

<div class="row">
	<div class="col-md-12">
		<hr>
        <center>
            <a href="{{ url('purchasing/purchase-orders') }}" class="btn btn-default">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Back') }}
            </a>
            <button type="submit" class="btn btn-danger btn-save">
                <i class="fa fa-save" aria-hidden="true"></i> {{ __('Save') }}
            </button>    
        </center>
        
	</div>
</div>