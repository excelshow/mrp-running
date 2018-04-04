<div class="row">
    <div class="col-sm-6">


        <div class="form-group {{ $errors->has('master_material_id') ? ' has-error' : '' }}">
            <label>Master Material ID (Number)</label>
            {!! Form::select('master_material_id', [
                '' => ''
                ] + App\MasterMaterial::pluck('material_number','id')->all(), null, ['class'=>'form-control']); !!}
            @if($errors->has('master_material_id'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('master_material_id') }}</span>            
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


        <div class="form-group {{ $errors->has('part_next_higher_assy') ? ' has-error' : '' }}">
            <label>Part Next Higher Assy</label>
            {!! Form::text('part_next_higher_assy', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('part_next_higher_assy'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('part_next_higher_assy') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('quantity_part') ? ' has-error' : '' }}">
            <label>Quantity Part</label>
            {!! Form::number('quantity_part', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('quantity_part'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('quantity_part') }}</span>            
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

    </div>
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
    <div class="col-sm-6">

        <div class="form-group {{ $errors->has('material_id') ? ' has-error' : '' }}">
            <label>Material Part ID</label>
            {!! Form::number('material_id', null, [
                'class'=>'form-control',
            ]) !!}
            @if($errors->has('material_id'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('material_id') }}</span>            
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
<<<<<<< HEAD
            {!! Form::text('quantity_part_thickness', null, [
                'class'=>'form-control decimal-input'
=======
            {!! Form::number('quantity_part_thickness', null, [
                'class'=>'form-control',
                'step'=>'any',
>>>>>>> 34f55ff5d50c33bf172e42f4d15ffadca308a454
            ]) !!}
            @if($errors->has('quantity_part_thickness'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('quantity_part_thickness') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('quantity_part_width') ? ' has-error' : '' }}">
            <label>Quantity Part Width</label>
<<<<<<< HEAD
            {!! Form::text('quantity_part_width', null, [
                'class'=>'form-control decimal-input'
=======
            {!! Form::number('quantity_part_width', null, [
                'class'=>'form-control',
                'step'=>'any',
>>>>>>> 34f55ff5d50c33bf172e42f4d15ffadca308a454
            ]) !!}
            @if($errors->has('quantity_part_width'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('quantity_part_width') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('quantity_part_length') ? ' has-error' : '' }}">
            <label>Quantity Part Length</label>
<<<<<<< HEAD
            {!! Form::text('quantity_part_length', null, [
                'class'=>'form-control decimal-input'
=======
            {!! Form::number('quantity_part_length', null, [
                'class'=>'form-control',
                'step'=>'any',
>>>>>>> 34f55ff5d50c33bf172e42f4d15ffadca308a454
            ]) !!}
            @if($errors->has('quantity_part_length'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('quantity_part_length') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('quantity_part_diameter') ? ' has-error' : '' }}">
            <label>Quantity Part Diameter</label>
<<<<<<< HEAD
            {!! Form::text('quantity_part_diameter', null, [
                'class'=>'form-control decimal-input'
=======
            {!! Form::number('quantity_part_diameter', null, [
                'class'=>'form-control',
                'step'=>'any',
>>>>>>> 34f55ff5d50c33bf172e42f4d15ffadca308a454
            ]) !!}
            @if($errors->has('quantity_part_diameter'))
                <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('quantity_part_diameter') }}</span>            
            @endif
        </div>

        <div class="form-group {{ $errors->has('quantity_part_weight') ? ' has-error' : '' }}">
            <label>Quantity Part Weight</label>
<<<<<<< HEAD
            {!! Form::text('quantity_part_weight', null, [
                'class'=>'form-control decimal-input'
=======
            {!! Form::number('quantity_part_weight', null, [
                'class'=>'form-control',
                'step'=>'any',
>>>>>>> 34f55ff5d50c33bf172e42f4d15ffadca308a454
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
            <a href="{{ url('engineering/bill-of-materials/maintenance-data') }}" class="btn btn-default">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Back') }}
            </a>
            <button type="submit" class="btn btn-danger btn-save">
                <i class="fa fa-save" aria-hidden="true"></i> {{ __('Save') }}
            </button>    
        </center>
        
	</div>
</div>