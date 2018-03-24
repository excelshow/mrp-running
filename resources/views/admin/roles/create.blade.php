@extends('layouts.admin.app')

@section('title', 'Dashboard | ')

@section('content')
<section class="content-header">
  <h1>
    {{substr(Route::currentRoutename(),5)}} Role
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Role</li>
  </ol>
</section>
<section class="content">
  @include('admin.partials.errors')
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
            
        <div class="box-header with-border">
          <h3 class="box-title">{{substr(Route::currentRoutename(),5)}} Role</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body">

        <form action="@yield('url', '/role/store')" method="post">
         {{csrf_field()}}
          @section('editMethod')
            @show
          <div class="form-group">
              <label class="control-label" for="first-name">Name <span class="required">*</span></label>
              <input type="text" data-validation="required" name="name" class="form-control" placeholder="Name" value="@yield('name')">
          </div>
          <div class="form-group">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Menu Lists</th>
                  <th class="non-user text-center">
                    <div class="checkbox checkbox-custom checkbox-primary" style="margin-top:0px !important;margin-bottom:0px !important;">
                      <label>
                        <input type="checkbox" onClick="toggle(this)" /> Select All<br/>
                      </label>
                    </div>
                  </th>
                </tr>
              </thead>
              <tbody>
              @php
                foreach($permissions as $data){
                   $ability_id[]  = $data->id;
                   $ability[]     = $data->name;      
                }
                $data_id=(array_chunk($ability_id,4));
                $data_ability=(array_chunk($ability,4));
                for($i=0; $i<count($data_id);$i++){
                  $label = $data_ability[$i][0];
                  $label_name = substr($label, strpos($label, "_") + 1);  
                  echo '<tr>';
                  echo '<td><b>'.ucfirst($label_name).'</b></td>';
                  for($j=0; $j<count($data_id[$i]);$j++){
                    $display = $data_ability[$i][$j];
                    $display_name =  explode("_", $display, 2);
                    if(isset($data_permission) && in_array($data_id[$i][$j],$data_permission)){
                      $checked = 'checked';
                    }
                    else{
                      $checked ='';
                    }
                    echo '<td>';
                    echo '<input id="permission" name="permission[]" '.$checked.' type="checkbox" value="'.$data_id[$i][$j].'">'.ucfirst($display_name[0]);
                    echo '</td>';
                  
                  }
                  echo '</tr>';

                }
                @endphp

              </tbody>
            </table>
          </div>

          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <button type="submit" id="checkBtn" class="btn btn-primary">Submit</button>
              <a href="/role" class="btn btn-danger">Back</a>
            </div>
          </div>
        </form>

        </div>

      </div>
      
    </div>
  </div>
</section>

@endsection


@push('scripts')
  @include('admin.roles.scripts')
@endpush
