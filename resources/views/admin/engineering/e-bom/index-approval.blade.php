@extends('layouts.admin.app')

@section('title', 'Engineering Bill of Materials Assy Approval | ')

@section('content')
<section class="content-header">
  <h1>
    Engineering Bill of Materials Assy Approval
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Engineering Bill of Materials Assy Approval</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header clearfix">
          <a href="{{ url('engineering/e-bom/assy/create') }}" class="btn btn-primary pull-right">Create</a>
        </div>
        <div class="box-body">
          <table id="datatable-general" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Master Material</th>
              <th>Part Level</th>
              <th>Part NHA</th>
              <th>Part Name</th>
              <th>Quantity Part</th>
              <th>Approved</th>
              <th>Updated At</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($materials as $item)
                <tr>
                  <td>{{ $item->master_material_id }}</td>
                  <td>{{ $item->part_level }}</td>
                  <td>{{ $item->part_nha }}</td>
                  <td>{{ $item->part_name }}</td>
                  <td>{{ $item->quantity_part }}</td>
                  <td>
                    @php
                      $label = '';
                      if ($item->is_approved) {
                        $label = 'success';
                      } else {
                        $label = 'danger';
                      }

                    @endphp
                    <label class="label label-{{ $label }}">{{ $item->is_approved ? 'Approved' : 'Not Approved' }}</label>
                  </td>
                  <td>{{ $item->updated_at }}</td>
                  <td>
                    <a href="{{ route('engineering.e-bom.approval.edit', $item->id) }}" class="btn btn-xs btn-info"">
                      <span class="glyphicon glyphicon-edit"></span> Approval
                    </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr>
              <th>Master Material</th>
              <th>Part Level</th>
              <th>Part NHA</th>
              <th>Part Name</th>
              <th>Quantity Part</th>
              <th>Approved</th>
              <th>Updated At</th>
              <th>Action</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
  </div>
</section>

@endsection

@push('scripts')
  <script type="text/javascript">
    jQuery( document ).ready(function() {
      var data = $( '#datatable-general' ).DataTable({
        responsive: true,
        bPaginate: true,
        lengthMenu: [25, 50, 100, 500, 1000],
        dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
      });
    });
  </script>
@endpush
