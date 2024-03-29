@extends('layouts.admin.app')

@section('title', 'Approval Bill of Materials | ')

@section('content')
<section class="content-header">
  <h1>
    Approval Bill of Materials
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Approval Bill of Materials</li>
  </ol>
</section>
<section class="content">
  <div class="row">
   <div class="col-md-12">
     <div class="box">
      <div class="box-header clearfix">
        <h4>Part Level: {{ $material->part_level }}</h4>
        <h4>Part Number: {{ $material->part_number }}</h4>
      </div>
      <div class="box-body">
        {!! Form::model($material, ['route' => ['engineering.bill-of-materials.approval.update', encrypt($material->id)],'method' =>'put','role'=>'form','files' => true])!!}
        {{ csrf_field() }}
        <table class="table table-responsive table-striped">
          <thead>
            <tr>
              <th width="20%">Master Material ID</th>
              <td>{{ $material->master_material_id }}</td>
            </tr>
            <tr>
              <th>Part Level</th>
              <td>{{ $material->part_level }}</td>
            </tr>
            <tr>
              <th>Part Number</th>
              <td>{{ $material->part_number }}</td>
            </tr>
            <tr>
              <th>Part Next Higher Assy</th>
              <td>{{ $material->part_next_higher_assy }}</td>
            </tr>
            <tr>
              <th>Part Name</th>
              <td>{{ $material->part_name }}</td>
            </tr>
            <tr>
              <th>Quantity Part</th>
              <td>{{ $material->quantity_part }}</td>
            </tr>
            <tr>
              <th>Part Unit of Measure</th>
              <td>{{ $material->part_uom }}</td>
            </tr>
            <tr>
              <th>Part Type</th>
              <td>{{ $material->part_type }}</td>
            </tr>
            <tr>
              <th>Koding ID</th>
              <td>{{ $material->koding_id }}</td>
            </tr>
            <tr>
              <th>Make</th>
              <td>{{ $material->make }}</td>
            </tr>
            <tr>
              <th>Part Symbol</th>
              <td>{{ $material->part_symbol }}</td>
            </tr>
            <tr>
              <th>Part Changes</th>
              <td>{{ $material->part_changes }}</td>
            </tr>
            <tr>
              <th>Material ID</th>
              <td>{{ $material->material_id }}</td>
            </tr>
            <tr>
              <th>Part Serial Number</th>
              <td>{{ $material->part_serial_number }}</td>
            </tr>
            <tr>
              <th>Quantity Part Thickness</th>
              <td>{{ $material->quantity_part_thickness }}</td>
            </tr>
            <tr>
              <th>Quantity Part Width</th>
              <td>{{ $material->quantity_part_width }}</td>
            </tr>
            <tr>
              <th>Quantity Part Length</th>
              <td>{{ $material->quantity_part_length }}</td>
            </tr>
            <tr>
              <th>Quantity Part Diameter</th>
              <td>{{ $material->quantity_part_diameter }}</td>
            </tr>
            <tr>
              <th>Quantity Part Weight</th>
              <td>{{ $material->quantity_part_weight }}</td>
            </tr>
            <tr>
              <th>Dimension Unit of Measure</th>
              <td>{{ $material->dimension_uom }}</td>
            </tr>
            <tr>
              <th>Remark</th>
              <td>{{ $material->remark }}</td>
            </tr>
            <tr>
              <th>Approve</th>
              <td>
                @php
                  $label = '';
                  if ($material->is_approved) {
                    $label = 'success';
                  } else {
                    $label = 'danger';
                  }

                @endphp
                <label class="label label-{{ $label }}">{{ $material->is_approved ? 'Approved' : 'Not Approved' }}</label>
              </td>
            </tr>
          </thead>
        </table>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group {{ $errors->has('is_approved') ? ' has-error' : '' }}">
                <label>Approval</label>
                {!! Form::select('is_approved', [
                    true => 'Approved',
                    false => 'Not Approved'
                    ] , null, ['class'=>'form-control']); !!}
                @if($errors->has('is_approved'))
                    <span id="form_control_1-error" class="help-block help-block-error">{{ $errors->first('is_approved') }}</span>            
                @endif
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <hr>
                <center>
                    <a href="{{ url('engineering/bill-of-materials/approval') }}" class="btn btn-default">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Back') }}
                    </a>
                    <button type="submit" class="btn btn-danger btn-save">
                        <i class="fa fa-save" aria-hidden="true"></i> {{ __('Save') }}
                    </button>    
                </center>
          </div>
        </div>
        {!! Form::close() !!} 
      </div>
       
     </div>
   </div>  
 </div>
</section>

@endsection
