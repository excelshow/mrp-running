@extends('layouts.admin.app')

@section('title', 'Master Materials | ')

@section('content')
<section class="content-header">
  <h1>
    Master Materials
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Master Materials</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header clearfix">
          <a href="{{ url('engineering/master-materials/maintenance-data/create') }}" class="btn btn-primary pull-right">Create</a>
        </div>
        <div class="box-body">
          <table id="datatable-general" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Barcode</th>
              <th>Number</th>
              <th>Name</th>
              <th>Material ID</th>
              <th>Created At</th>
              <th>Updated At</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($materials as $item)
                <tr>
                  <td height="500">
                    @php
                      // echo DNS1D::getBarcodeHTML($item->id, "C39");
                      echo '<img src="data:image/png;base64,' . DNS1D::getBarcodePNG("4", "C39+",3,33,array(1,1,1), true) . '"    />';
                      // echo '<img src="' . DNS1D::getBarcodePNG("4", "C39+",3,33,array(1,1,1), true) . '" alt="barcode"   />';
                      // echo DNS1D::getBarcodeSVG("4445645656", "PHARMA2T",3,33,"green", true);
                      // echo DNS1D::getBarcodeHTML("4445645656", "PHARMA2T",3,33,"green", true);
                    @endphp
                  </td>
                  <td>{{ $item->material_number }}</td>
                  <td>{{ $item->material_name }}</td>
                  <td>{{ $item->material_id }}</td>
                  <td>{{ $item->created_at }}</td>
                  <td>{{ $item->updated_at }}</td>
                  <td>
                    <a href="{{ route('engineering.master-materials.maintenance-data.edit', $item->id) }}" class="btn btn-info"">
                      <span class="glyphicon glyphicon-edit"></span> Edit
                    </a>
                    <button class="btn btn-danger remove-item" data-id="{{ encrypt($item->id) }}">
                      <span class="glyphicon glyphicon-trash"></span> Delete
                    </button>
                  </td>
                </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr>
              <th>Material Number</th>
              <th>Material Number</th>
              <th>Material Name</th>
              <th>Material ID</th>
              <th>Created At</th>
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

@push('styles')
  
@endpush

@push('scripts')
  <script type="text/javascript">
    jQuery( document ).ready(function() {
      function getBase64Image(img) {
        var canvas = document.createElement("canvas");
        canvas.width = img.width;
        canvas.height = img.height;
        var ctx = canvas.getContext("2d");
        ctx.drawImage(img, 0, 0);
        return canvas.toDataURL("image/png");
      }

      var table = $( '#datatable-general' ).DataTable({
        responsive: true,
        bPaginate: true,
        lengthMenu: [25, 50, 100, 500, 1000],
        dom: 'Bfrtip',
            buttons: [
                // 'copy', 'csv', 'excel', 'pdf', 'print', 
                // 'pdf'
                {
                  extend : 'pdfHtml5',
                  customize: function(doc) {
                    
                    var image = '';
                    for (var i=1;i<doc.content[1].table.body.length;i++) {

                      var str = doc.content[1].table.body[i][0].text;
                      var regex = /src="(data:image\/[^;]+;base64[^"]+)"/;
                      var src = regex.exec(str)[1];
                      image = src;

                      delete doc.content[1].table.body[i][0].text;
                      doc.content[1].table.body[i][0].image = doc.content[1].table.body[i][0].text;
                      doc.content[1].table.body[i][0].image = src;
                      doc.content[1].table.body[i][0].width = 100;
                      doc.content[1].table.body[i][0].height = 150;
                    }

                  },
                  text : '<i class="fa fa-file-pdf-o"> PDF</i>',
                  titleAttr : 'PDF', 
                  exportOptions : {
                    stripHtml: false,
                    columns: [ 0, 1, 2, 3, 4, 5 ]
                  }
                }

            ]
      });
      

      $(document).on('click', '.remove-item', function(e){
        e.preventDefault();
        var id = $(this).attr('data-id');
        swal({
          title: "Are you sure?",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Yes, Remove",
          cancelButtonText: "No, Cancel",
          closeOnConfirm: false,
          closeOnCancel: false },
          function(isConfirm){
          if (isConfirm) {
            $.ajax({
              type: "DELETE",
              url: "{{ url('engineering/master-materials/maintenance-data') }}"+"/"+id,
              data: {_token: "{{ csrf_token() }}"},
              cache: false,
              success: function(data){
                swal({
                  title: "Data Removed!",
                  type: "success"
                }, function(){
                  window.location.href = '{{ url()->current() }}';
                });
              }
            });
          } else {
            swal("Cancel", "Remove data canceled", "error");
          }
        });
      });
    });
  </script>
@endpush
