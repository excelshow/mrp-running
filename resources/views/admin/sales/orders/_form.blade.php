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

        <div class="form-group {{ $errors->has('inquiry_type') ? ' has-error' : '' }}">
            <label>Inquiry Type</label>
            {!! Form::text('inquiry_type', null, [
                'class'=>'form-control',
                'required'=>'required',
            ]) !!}
            @if($errors->has('inquiry_type'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('inquiry_type') }}</span>            
            @endif
        </div>

        <hr>

        <div class="form-group {{ $errors->has('customer_code') ? ' has-error' : '' }}">
            <label>Cutomer Code</label>
            {!! Form::text('customer_code', null, [
                'class'=>'form-control',
                'required'=>'required',
            ]) !!}
            @if($errors->has('customer_code'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('customer_code') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('customer_director') ? ' has-error' : '' }}">
            <label>Customer Director</label>
            {!! Form::text('customer_director', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('customer_director'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('customer_director') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('customer_name') ? ' has-error' : '' }}">
            <label>Customer Name</label>
            {!! Form::text('customer_name', null, [
                'class'=>'form-control',
                'required'=>'required',
            ]) !!}
            @if($errors->has('customer_name'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('customer_name') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('customer_address') ? ' has-error' : '' }}">
            <label>Customer Address</label>
            {!! Form::text('customer_address', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('customer_address'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('customer_address') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('customer_postal') ? ' has-error' : '' }}">
            <label>Customer Postal</label>
            {!! Form::text('customer_postal', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('customer_postal'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('customer_postal') }}</span>            
            @endif
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('total_price') ? ' has-error' : '' }}">
            <label>Total Price</label>
            {!! Form::text('total_price', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('total_price'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('total_price') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('tax') ? ' has-error' : '' }}">
            <label>Tax</label>
            {!! Form::text('tax', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('tax'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('tax') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('discount') ? ' has-error' : '' }}">
            <label>Discount</label>
            {!! Form::text('discount', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('discount'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('discount') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('currency_id') ? ' has-error' : '' }}">
            <label>Currency</label>
            {!! Form::select('currency_id', [
                '' => ''
                ] + App\MasterKurs::pluck('currency','id')->all(), null, ['class'=>'form-control']); !!}
            @if($errors->has('currency_id'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('currency_id') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('price_date') ? ' has-error' : '' }}">
            <label>Price Date</label>
            {!! Form::date('price_date', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('price_date'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('price_date') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('delivery_date') ? ' has-error' : '' }}">
            <label>Delivery Date</label>
            {!! Form::date('delivery_date', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('delivery_date'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('delivery_date') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('delivery_plant') ? ' has-error' : '' }}">
            <label>Delivery Plant</label>
            {!! Form::text('delivery_plant', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('delivery_plant'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('delivery_plant') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('delivery_volumen') ? ' has-error' : '' }}">
            <label>Delivery Volume</label>
            {!! Form::text('delivery_volumen', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('delivery_volumen'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('delivery_volumen') }}</span>            
            @endif
        </div>
            
    </div>
    

    
</div>
<hr>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('contract_start') ? ' has-error' : '' }}">
            <label>Contract Start</label>
            {!! Form::date('contract_start', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('contract_start'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('contract_start') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('contract_end') ? ' has-error' : '' }}">
            <label>Contract End</label>
            {!! Form::date('contract_end', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('contract_end'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('contract_end') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('document_type') ? ' has-error' : '' }}">
            <label>Document Type</label>
            {!! Form::text('document_type', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('document_type'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('document_type') }}</span>            
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

    </div>
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}">
            <label>Status</label>
            {!! Form::select('status', [
                'N' => 'Not Completed', 'Y' => 'Completed'
                ] , null, ['class'=>'form-control']); !!}
            @if($errors->has('status'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('status') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('total_weight') ? ' has-error' : '' }}">
            <label>Total Weight</label>
            {!! Form::text('total_weight', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('total_weight'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('total_weight') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('weight_uom') ? ' has-error' : '' }}">
            <label>Wight Unit of Measure</label>
            {!! Form::text('weight_uom', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('weight_uom'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('weight_uom') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('delivery_block') ? ' has-error' : '' }}">
            <label>Delivery Block</label>
            {!! Form::text('delivery_block', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('delivery_block'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('delivery_block') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('bill_block') ? ' has-error' : '' }}">
            <label>Bill Block</label>
            {!! Form::text('bill_block', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('bill_block'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('bill_block') }}</span>            
            @endif
        </div>

    </div>
</div>

<div class="row">
	<div class="col-md-12">
		<hr>
        <center>
            <a href="{{ url('sales/orders') }}" class="btn btn-default">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Back') }}
            </a>
            <button type="submit" class="btn btn-danger btn-save">
                <i class="fa fa-save" aria-hidden="true"></i> {{ __('Save') }}
            </button>    
        </center>
        
	</div>
</div>