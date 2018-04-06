<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\EBOMAssy;
use Kamaln7\Toastr\Facades\Toastr;
use Auth;

class EBOMAssyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials = EBOMAssy::orderBy('created_at','desc')->get();
        $data['materials'] = $materials;
        return view('admin.engineering.bill-of-materials.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.engineering.bill-of-materials.create');
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
            'master_material_id' => 'required',
            'part_level' => 'required',
            'part_number' => 'required',
            'part_name' => 'required',
            'koding_id' => 'required',
        ]);

        $material = new EBOMAssy();
        $material->master_material_id = $request->master_material_id;
        $material->part_level = $request->part_level;
        $material->part_number = $request->part_number;
        $material->part_next_higher_assy = $request->part_next_higher_assy;
        $material->part_name = $request->part_name;
        $material->quantity_part = $request->quantity_part;
        $material->part_uom = $request->part_uom;
        $material->part_type = $request->part_type;
        $material->koding_id = $request->koding_id;
        $material->make = $request->make;
        $material->part_symbol = $request->part_symbol;
        $material->part_changes = $request->part_changes;
        $material->material_id = $request->material_id;
        $material->part_serial_number = $request->part_serial_number;
        $material->quantity_part_thickness = $request->quantity_part_thickness;
        $material->quantity_part_width = $request->quantity_part_width;
        $material->quantity_part_length = $request->quantity_part_length;
        $material->quantity_part_diameter = $request->quantity_part_diameter;
        $material->quantity_part_weight = $request->quantity_part_weight;
        $material->dimension_uom = $request->dimension_uom;
        $material->remark = $request->remark;
        $material->user_id_created = Auth::user()->id;
        $material->user_id_updated = Auth::user()->id;
        $material->save();

        Toastr::success('Bill of material created.', 'Success');
        return redirect('engineering/bill-of-materials/maintenance-data');
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
        $material = EBOMAssy::find($id);
        $data['material'] = $material;
        return view('admin.engineering.bill-of-materials.edit', $data);
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
            'master_material_id' => 'required',
            'part_level' => 'required',
            'part_number' => 'required',
            'part_name' => 'required',
            'koding_id' => 'required',
        ]);

        $material = EBOMAssy::find(decrypt($id));
        $material->master_material_id = $request->master_material_id;
        $material->part_level = $request->part_level;
        $material->part_number = $request->part_number;
        $material->part_next_higher_assy = $request->part_next_higher_assy;
        $material->part_name = $request->part_name;
        $material->quantity_part = $request->quantity_part;
        $material->part_uom = $request->part_uom;
        $material->part_type = $request->part_type;
        $material->koding_id = $request->koding_id;
        $material->make = $request->make;
        $material->part_symbol = $request->part_symbol;
        $material->part_changes = $request->part_changes;
        $material->material_id = $request->material_id;
        $material->part_serial_number = $request->part_serial_number;
        $material->quantity_part_thickness = $request->quantity_part_thickness;
        $material->quantity_part_width = $request->quantity_part_width;
        $material->quantity_part_length = $request->quantity_part_length;
        $material->quantity_part_diameter = $request->quantity_part_diameter;
        $material->quantity_part_weight = $request->quantity_part_weight;
        $material->dimension_uom = $request->dimension_uom;
        $material->remark = $request->remark;
        $material->user_id_updated = Auth::user()->id;
        $material->save();

        Toastr::success('Bill of material updated.', 'Success');
        return redirect('engineering/bill-of-materials/maintenance-data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        EBOMAssy::find(decrypt($id))->delete();
        Toastr::success('Material Deleted.', 'Success');

        $materials = EBOMAssy::orderBy('created_at','desc')->get();
        $data['materials'] = $materials;
        return view('admin.engineering.bill-of-materials.index', $data);
    }

    public function approval()
    {
        $materials = EBOMAssy::orderBy('created_at','desc')->get();
        $data['materials'] = $materials;
        return view('admin.engineering.bill-of-materials.index-approval', $data);
    }

    public function editApproval($id)
    {
        $material = EBOMAssy::find($id);
        $data['material'] = $material;
        return view('admin.engineering.bill-of-materials.edit-approval', $data);
    }

    public function updateApproval(Request $request, $id)
    {
        $material = EBOMAssy::find(decrypt($id));
        $material->is_approved = $request->is_approved;
        $material->user_id_updated = Auth::user()->id;
        $material->save();

        Toastr::success('Approval updated.', 'Success');
        return redirect('engineering/bill-of-materials/approval');
    }
}
