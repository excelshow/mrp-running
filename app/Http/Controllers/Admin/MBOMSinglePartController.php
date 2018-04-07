<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\MBOMSinglePart;
use Kamaln7\Toastr\Facades\Toastr;
use Auth;

class MBOMSinglePartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials = MBOMSinglePart::orderBy('created_at','desc')->get();
        $data['materials'] = $materials;
        return view('admin.engineering.m-bom-single-parts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.engineering.m-bom-single-parts.create');
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
            'm_bom_assy_id' => 'required',
            'part_level' => 'required',
            'part_number' => 'required',
            'part_nha' => 'required',
            'part_name' => 'required',
            'quantity_part_per_sheet' => 'required',
        ]);

        $material = new MBOMSinglePart();
        $material->m_bom_assy_id = $request->m_bom_assy_id;
        $material->part_level = $request->part_level;
        $material->part_number = $request->part_number;
        $material->part_nha = $request->part_nha;
        $material->part_name = $request->part_name;
        $material->quantity_part_per_sheet = $request->quantity_part_per_sheet;
        $material->part_uom = $request->part_uom;
        $material->part_type = $request->part_type;
        $material->koding_id = $request->koding_id;
        $material->make = $request->make;
        $material->part_symbol = $request->part_symbol;
        $material->part_changes = $request->part_changes;
        $material->part_material_id = $request->part_material_id;
        $material->part_serial_number = $request->part_serial_number;
        $material->quantity_part_thickness = $request->quantity_part_thickness;
        $material->quantity_part_width = $request->quantity_part_width;
        $material->quantity_part_length = $request->quantity_part_length;
        $material->quantity_part_diameter = $request->quantity_part_diameter;
        $material->quantity_part_weight = $request->quantity_part_weight;
        $material->material_specification = $request->material_specification;
        $material->quantity_material = $request->quantity_material;
        $material->quantity_kg_pcs = $request->quantity_kg_pcs;
        $material->part_ratio = $request->part_ratio;
        $material->dim_uom = $request->dim_uom;
        $material->weight_uom = $request->weight_uom;
        $material->remark = $request->remark;
        $material->user_id_created = Auth::user()->id;
        $material->user_id_updated = Auth::user()->id;
        $material->save();

        Toastr::success('Manufacturing BOM Assy created.', 'Success');
        return redirect('engineering/m-bom/single-parts');
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
        $material = MBOMSinglePart::find($id);
        $data['material'] = $material;
        return view('admin.engineering.m-bom-single-parts.edit', $data);
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
            'm_bom_assy_id' => 'required',
            'part_level' => 'required',
            'part_number' => 'required',
            'part_nha' => 'required',
            'part_name' => 'required',
            'quantity_part_per_sheet' => 'required',
        ]);

        $material = MBOMSinglePart::find(decrypt($id));
        $material->m_bom_assy_id = $request->m_bom_assy_id;
        $material->part_level = $request->part_level;
        $material->part_number = $request->part_number;
        $material->part_nha = $request->part_nha;
        $material->part_name = $request->part_name;
        $material->quantity_part_per_sheet = $request->quantity_part_per_sheet;
        $material->part_uom = $request->part_uom;
        $material->part_type = $request->part_type;
        $material->koding_id = $request->koding_id;
        $material->make = $request->make;
        $material->part_symbol = $request->part_symbol;
        $material->part_changes = $request->part_changes;
        $material->part_material_id = $request->part_material_id;
        $material->part_serial_number = $request->part_serial_number;
        $material->quantity_part_thickness = $request->quantity_part_thickness;
        $material->quantity_part_width = $request->quantity_part_width;
        $material->quantity_part_length = $request->quantity_part_length;
        $material->quantity_part_diameter = $request->quantity_part_diameter;
        $material->quantity_part_weight = $request->quantity_part_weight;
        $material->material_specification = $request->material_specification;
        $material->quantity_material = $request->quantity_material;
        $material->quantity_kg_pcs = $request->quantity_kg_pcs;
        $material->part_ratio = $request->part_ratio;
        $material->dim_uom = $request->dim_uom;
        $material->weight_uom = $request->weight_uom;
        $material->remark = $request->remark;
        $material->user_id_updated = Auth::user()->id;
        $material->save();

        Toastr::success('Manufacturing BOM updated.', 'Success');
        return redirect('engineering/m-bom/single-parts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MBOMSinglePart::find(decrypt($id))->delete();
        Toastr::success('Material Deleted.', 'Success');

        $materials = MBOMSinglePart::orderBy('created_at','desc')->get();
        $data['materials'] = $materials;
        return view('admin.engineering.m-bom-single-parts.index', $data);
    }
}
