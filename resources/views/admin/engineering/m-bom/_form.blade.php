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

<div class="row">
	<div class="col-md-12">
		<hr>
        <center>
            <a href="{{ url('engineering/m-bom/assy') }}" class="btn btn-default">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Back') }}
            </a>
            <button type="submit" class="btn btn-danger btn-save">
                <i class="fa fa-save" aria-hidden="true"></i> {{ __('Save') }}
            </button>    
        </center>
        
	</div>
</div>