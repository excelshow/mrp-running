<div class="row">
    <div class="col-sm-6">

        <div class="form-group {{ $errors->has('material_number') ? ' has-error' : '' }}">
            <label>Material Number</label>
            {!! Form::text('material_number', null, [
                'class'=>'form-control',
                'required'=>'required',
            ]) !!}
            @if($errors->has('material_number'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('material_number') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('material_name') ? ' has-error' : '' }}">
            <label>Material Name</label>
            {!! Form::text('material_name', null, [
                'class'=>'form-control',
                'required'=>'required',
            ]) !!}
            @if($errors->has('material_name'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('material_name') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('material_id') ? ' has-error' : '' }}">
            <label>Material ID</label>
            {!! Form::number('material_id', null, [
                'class'=>'form-control',
                'required'=>'required',
            ]) !!}
            @if($errors->has('material_id'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('material_id') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('part_class_id') ? ' has-error' : '' }}">
            <label>Part Class</label>
            {!! Form::select('part_class_id', [
                '' => ''
                ] + App\MasterPartClass::pluck('name','id')->all(), null, ['class'=>'form-control']); !!}
            @if($errors->has('part_class_id'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('part_class_id') }}</span>            
            @endif
        </div>

    </div>
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('material_uom') ? ' has-error' : '' }}">
            <label>Material Unit of Measure</label>
            {!! Form::text('material_uom', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('material_uom'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('material_uom') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('part_symbol') ? ' has-error' : '' }}">
            <label>Part Symbol</label>
            {!! Form::text('part_symbol', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('part_symbol'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('part_symbol') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('part') ? ' has-error' : '' }}">
            <label>Part</label>
            {!! Form::text('part', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('part'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('part') }}</span>            
            @endif
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('koding_id') ? ' has-error' : '' }}">
            <label>Koding ID</label>
            {!! Form::select('koding_id', [
                '' => ''
                ] + App\MasterKoding::pluck('code','id')->all(), null, ['class'=>'form-control']); !!}
            @if($errors->has('koding_id'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('koding_id') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('make') ? ' has-error' : '' }}">
            <label>Make</label>
            {!! Form::text('make', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('make'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('make') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('part_serial_number') ? ' has-error' : '' }}">
            <label>Part Serial Number</label>
            {!! Form::text('part_serial_number', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('part_serial_number'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('part_serial_number') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('quantity_part_thickness') ? ' has-error' : '' }}">
            <label>Quantity Part Thickness</label>
            {!! Form::text('quantity_part_thickness', null, [
                'class'=>'form-control decimal-input',
            ]) !!}
            @if($errors->has('quantity_part_thickness'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('quantity_part_thickness') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('quantity_part_width') ? ' has-error' : '' }}">
            <label>Quantity Part Width</label>
            {!! Form::text('quantity_part_width', null, [
                'class'=>'form-control decimal-input',
            ]) !!}
            @if($errors->has('quantity_part_width'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('quantity_part_width') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('quantity_part_length') ? ' has-error' : '' }}">
            <label>Quantity Part Length</label>
            {!! Form::text('quantity_part_length', null, [
                'class'=>'form-control decimal-input',
            ]) !!}
            @if($errors->has('quantity_part_length'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('quantity_part_length') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('quantity_part_diameter') ? ' has-error' : '' }}">
            <label>Quantity Part Diameter</label>
            {!! Form::text('quantity_part_diameter', null, [
                'class'=>'form-control decimal-input',
            ]) !!}
            @if($errors->has('quantity_part_diameter'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('quantity_part_diameter') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('quantity_part_weight') ? ' has-error' : '' }}">
            <label>Quantity Part Weight</label>
            {!! Form::text('quantity_part_weight', null, [
                'class'=>'form-control decimal-input',
            ]) !!}
            @if($errors->has('quantity_part_weight'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('quantity_part_weight') }}</span>            
            @endif
        </div>


    </div>
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('dimension_uom') ? ' has-error' : '' }}">
            <label>Dimension Unit Of Measure</label>
            {!! Form::text('dimension_uom', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('dimension_uom'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('dimension_uom') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('weight_uom') ? ' has-error' : '' }}">
            <label>Weight Unit Of Measure</label>
            {!! Form::text('weight_uom', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('weight_uom'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('weight_uom') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('material_specification') ? ' has-error' : '' }}">
            <label>Material Specification</label>
            {!! Form::text('material_specification', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('material_specification'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('material_specification') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('quantity_part_material') ? ' has-error' : '' }}">
            <label>Quantity Part Material</label>
            {!! Form::number('quantity_part_material', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('quantity_part_material'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('quantity_part_material') }}</span>            
            @endif
        </div>

    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('store_id') ? ' has-error' : '' }}">
            <label>Store ID</label>
            {!! Form::select('store_id', [
                '' => ''
                ] + App\MasterStore::pluck('code','id')->all(), null, ['class'=>'form-control']); !!}
            @if($errors->has('store_id'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('store_id') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('bin_location') ? ' has-error' : '' }}">
            <label>Bin Location</label>
            {!! Form::text('bin_location', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('bin_location'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('bin_location') }}</span>            
            @endif
        </div>
        <div class="form-group {{ $errors->has('remark') ? ' has-error' : '' }}">
            <label>Remark</label>
            {!! Form::text('remark', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('remark'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('remark') }}</span>            
            @endif
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}">
            <label>Status</label>
            {!! Form::select('status', [
                'progress' => 'In Progress',
                'completed' => 'Completed',
                'not-completed' => 'Not Completed'
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
            <a href="{{ url('engineering/master-materials/maintenance-data') }}" class="btn btn-default">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Back') }}
            </a>
            <button type="submit" class="btn btn-danger btn-save">
                <i class="fa fa-save" aria-hidden="true"></i> {{ __('Save') }}
            </button>    
        </center>
        
	</div>
</div>