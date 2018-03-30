<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\MasterMaterial;
use Kamaln7\Toastr\Facades\Toastr;
use Auth;

class MasterMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials = MasterMaterial::orderBy('created_at','desc')->get();
        $data['materials'] = $materials;
        return view('admin.engineering.master-materials.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.engineering.master-materials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'material_number' => 'required',
            'material_name' => 'required',
        ]);

        $material = new MasterMaterial();
        $material->material_number = $request->material_number;
        $material->material_name = $request->material_name;
        $material->material_id = $request->material_id;
        $material->part_class_id = $request->part_class_id;
        $material->material_uom = $request->material_uom;
        $material->part_symbol = $request->part_symbol;
        $material->part = $request->part;
        $material->koding_id = $request->koding_id;
        $material->make = $request->make;
        $material->part_serial_number = $request->part_serial_number;
        $material->quantity_part_thickness = $request->quantity_part_thickness;
        $material->quantity_part_width = $request->quantity_part_width;
        $material->quantity_part_length = $request->quantity_part_length;
        $material->quantity_part_diameter = $request->quantity_part_diameter;
        $material->quantity_part_weight = $request->quantity_part_weight;
        $material->dimension_uom = $request->dimension_uom;
        $material->weight_uom = $request->weight_uom;
        $material->material_specification = $request->material_specification;
        $material->quantity_part_material = $request->quantity_part_material;
        $material->store_id = $request->store_id;
        $material->bin_location = $request->bin_location;
        $material->remark = $request->remark;
        $material->status = $request->status;
        $material->user_id_created = Auth::user()->id;
        $material->user_id_updated = Auth::user()->id;
        $material->save();

        Toastr::success('Material created.', 'Success');
        return redirect('engineering/master-materials/maintenance-data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $material = MasterMaterial::find($id);
        $data['material'] = $material;
        return view('admin.engineering.master-materials.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'material_number' => 'required',
            'material_name' => 'required',
        ]);

        $material = MasterMaterial::find(decrypt($id));
        $material->material_number = $request->material_number;
        $material->material_name = $request->material_name;
        $material->material_id = $request->material_id;
        $material->part_class_id = $request->part_class_id;
        $material->material_uom = $request->material_uom;
        $material->part_symbol = $request->part_symbol;
        $material->part = $request->part;
        $material->koding_id = $request->koding_id;
        $material->make = $request->make;
        $material->part_serial_number = $request->part_serial_number;
        $material->quantity_part_thickness = $request->quantity_part_thickness;
        $material->quantity_part_width = $request->quantity_part_width;
        $material->quantity_part_length = $request->quantity_part_length;
        $material->quantity_part_diameter = $request->quantity_part_diameter;
        $material->quantity_part_weight = $request->quantity_part_weight;
        $material->dimension_uom = $request->dimension_uom;
        $material->weight_uom = $request->weight_uom;
        $material->material_specification = $request->material_specification;
        $material->quantity_part_material = $request->quantity_part_material;
        $material->store_id = $request->store_id;
        $material->bin_location = $request->bin_location;
        $material->remark = $request->remark;
        $material->status = $request->status;
        $material->user_id_updated = Auth::user()->id;
        $material->save();

        Toastr::success('Material updated.', 'Success');
        return redirect('engineering/master-materials/maintenance-data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MasterMaterial::find(decrypt($id))->delete();
        flash('Material Deleted.')->success();

        $materials = MasterMaterial::orderBy('created_at','desc')->get();
        $data['materials'] = $materials;
        return view('admin.engineering.master-materials.index', $data);
    }

    public function approval()
    {
        $materials = MasterMaterial::orderBy('created_at','desc')->get();
        $data['materials'] = $materials;
        return view('admin.engineering.master-materials.index-approval', $data);
    }

    public function editApproval($id)
    {
        $material = MasterMaterial::find($id);
        $data['material'] = $material;
        return view('admin.engineering.master-materials.edit-approval', $data);
    }

    public function updateApproval(Request $request, $id)
    {
        $material = MasterMaterial::find(decrypt($id));
        $material->is_approved = $request->is_approved;
        $material->user_id_updated = Auth::user()->id;
        $material->save();

        Toastr::success('Approval updated.', 'Success');
        return redirect('engineering/master-materials/approval');
    }
}
