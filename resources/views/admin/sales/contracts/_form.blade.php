<div class="row">
    <div class="col-sm-6">

        <div class="form-group {{ $errors->has('sales_order_id') ? ' has-error' : '' }}">
            <label>Sales Order (Order Number)</label>
            {!! Form::select('sales_order_id', [
                '' => ''
                ] + App\SalesOrder::pluck('order_number','id')->all(), null, ['class'=>'form-control']); !!}
            @if($errors->has('sales_order_id'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('sales_order_id') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('customer_id') ? ' has-error' : '' }}">
            <label>Customer ID</label>
            {!! Form::number('customer_id', null, [
                'class'=>'form-control',
                'required'=>'required',
            ]) !!}
            @if($errors->has('customer_id'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('customer_id') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('contract_number') ? ' has-error' : '' }}">
            <label>Contract Number</label>
            {!! Form::text('contract_number', null, [
                'class'=>'form-control',
                'required'=>'required',
            ]) !!}
            @if($errors->has('contract_number'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('contract_number') }}</span>            
            @endif
        </div>

        <hr>

        <div class="form-group {{ $errors->has('contract_from') ? ' has-error' : '' }}">
            <label>Contract From</label>
            {!! Form::date('contract_from', null, [
                'class'=>'form-control',
                'required'=>'required',
            ]) !!}
            @if($errors->has('contract_from'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('contract_from') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('contract_to') ? ' has-error' : '' }}">
            <label>Contract To</label>
            {!! Form::date('contract_to', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('contract_to'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('contract_to') }}</span>            
            @endif
        </div>

    </div>
    <div class="col-sm-6">

        <div class="form-group {{ $errors->has('contract_value') ? ' has-error' : '' }}">
            <label>Contract Value</label>
            {!! Form::text('contract_value', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('contract_value'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('contract_value') }}</span>            
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

        <div class="form-group {{ $errors->has('project_code') ? ' has-error' : '' }}">
            <label>Project Code</label>
            {!! Form::text('project_code', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('project_code'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('project_code') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('project_name') ? ' has-error' : '' }}">
            <label>Project Name</label>
            {!! Form::text('project_name', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('project_name'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('project_name') }}</span>            
            @endif
        </div>

    </div>
    
</div>


<div class="row">
	<div class="col-md-12">
		<hr>
        <center>
            <a href="{{ url('sales/contracts') }}" class="btn btn-default">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Back') }}
            </a>
            <button type="submit" class="btn btn-danger btn-save">
                <i class="fa fa-save" aria-hidden="true"></i> {{ __('Save') }}
            </button>    
        </center>
        
	</div>
</div>