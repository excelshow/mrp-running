<div class="row">
    <div class="col-sm-6">


        <div class="form-group {{ $errors->has('m_bom_assy_id') ? ' has-error' : '' }}">
            <label>Manufacturing BOM Assy</label>
            {!! Form::select('m_bom_assy_id', [
                '' => ''
                ] + App\EBOMAssy::pluck('part_name','id')->all(), null, ['class'=>'form-control']); !!}
            @if($errors->has('m_bom_assy_id'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('m_bom_assy_id') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('part_level') ? ' has-error' : '' }}">
            <label>Part Level</label>
            {!! Form::number('part_level', null, [
                'class'=>'form-control',
                'required'=>'required',
            ]) !!}
            @if($errors->has('part_level'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('part_level') }}</span>            
            @endif
        </div>
        
        <div class="form-group {{ $errors->has('part_number') ? ' has-error' : '' }}">
            <label>Part Number</label>
            {!! Form::text('part_number', null, [
                'class'=>'form-control',
                'required'=>'required',
            ]) !!}
            @if($errors->has('part_number'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('part_number') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('part_nha') ? ' has-error' : '' }}">
            <label>Part Next Higher Assy</label>
            {!! Form::text('part_nha', null, [
                'class'=>'form-control',
                'required'=>'required',
            ]) !!}
            @if($errors->has('part_nha'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('part_nha') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('part_name') ? ' has-error' : '' }}">
            <label>Part Name</label>
            {!! Form::text('part_name', null, [
                'class'=>'form-control',
                'required'=>'required',
            ]) !!}
            @if($errors->has('part_name'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('part_name') }}</span>            
            @endif
        </div>

        

    </div>
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('quantity_part_per_sheet') ? ' has-error' : '' }}">
            <label>Quantity Part Per Sheet</label>
            {!! Form::number('quantity_part_per_sheet', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('quantity_part_per_sheet'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('quantity_part_per_sheet') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('part_uom') ? ' has-error' : '' }}">
            <label>Part Unit of Measure</label>
            {!! Form::text('part_uom', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('part_uom'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('part_uom') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('part_type') ? ' has-error' : '' }}">
            <label>Part Type</label>
            {!! Form::text('part_type', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('part_type'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('part_type') }}</span>            
            @endif
        </div>
        
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

        <div class="form-group {{ $errors->has('part_symbol') ? ' has-error' : '' }}">
            <label>Part Symbol</label>
            {!! Form::text('part_symbol', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('part_symbol'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('part_symbol') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('part_changes') ? ' has-error' : '' }}">
            <label>Part Changes</label>
            {!! Form::number('part_changes', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('part_changes'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('part_changes') }}</span>            
            @endif
        </div>

    </div>
</div>

<hr>

<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('part_material_id') ? ' has-error' : '' }}">
            <label>Part Material ID</label>
            {!! Form::number('part_material_id', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('part_material_id'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('part_material_id') }}</span> 
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
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('material_specification') ? ' has-error' : '' }}">
            <label>Material Specification</label>
            {!! Form::text('material_specification', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('material_specification'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('material_specification') }}</span> 
            @endif
        </div>

        <div class="form-group {{ $errors->has('quantity_material') ? ' has-error' : '' }}">
            <label>Quantity Material</label>
            {!! Form::text('quantity_material', null, [
                'class'=>'form-control decimal-input',
            ]) !!}
            @if($errors->has('quantity_material'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('quantity_material') }}</span>
            @endif
        </div>

        <div class="form-group {{ $errors->has('quantity_kg_pcs') ? ' has-error' : '' }}">
            <label>Quantity kg/pcs</label>
            {!! Form::text('quantity_kg_pcs', null, [
                'class'=>'form-control decimal-input',
            ]) !!}
            @if($errors->has('quantity_kg_pcs'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('quantity_kg_pcs') }}</span>
            @endif
        </div>

        <div class="form-group {{ $errors->has('part_ratio') ? ' has-error' : '' }}">
            <label>Part Ratio</label>
            {!! Form::text('part_ratio', null, [
                'class'=>'form-control decimal-input',
            ]) !!}
            @if($errors->has('part_ratio'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('part_ratio') }}</span>
            @endif
        </div>

        <div class="form-group {{ $errors->has('dim_uom') ? ' has-error' : '' }}">
            <label>Dimension Unit of Measure</label>
            {!! Form::text('dim_uom', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('dim_uom'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('dim_uom') }}</span>
            @endif
        </div>

        <div class="form-group {{ $errors->has('weight_uom') ? ' has-error' : '' }}">
            <label>Weight Unit of Measure</label>
            {!! Form::text('weight_uom', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('weight_uom'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('weight_uom') }}</span>
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
</div>

<div class="row">
	<div class="col-md-12">
		<hr>
        <center>
            <a href="{{ url('engineering/m-bom/single-parts') }}" class="btn btn-default">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Back') }}
            </a>
            <button type="submit" class="btn btn-danger btn-save">
                <i class="fa fa-save" aria-hidden="true"></i> {{ __('Save') }}
            </button>    
        </center>
        
	</div>
</div>