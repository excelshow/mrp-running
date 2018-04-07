<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\MBOMAssy;
use Kamaln7\Toastr\Facades\Toastr;
use Auth;

class MBOMAssyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials = MBOMAssy::orderBy('created_at','desc')->get();
        $data['materials'] = $materials;
        return view('admin.engineering.m-bom.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.engineering.m-bom.create');
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
            'part_nha' => 'required',
            'part_name' => 'required',
            'quantity_part' => 'required',
        ]);

        $material = new MBOMAssy();
        $material->master_material_id = $request->master_material_id;
        $material->part_level = $request->part_level;
        $material->part_nha = $request->part_nha;
        $material->part_name = $request->part_name;
        $material->quantity_part = $request->quantity_part;
        $material->part_uom = $request->part_uom;
        $material->part_type = $request->part_type;
        $material->part_symbol = $request->part_symbol;
        $material->part_changes = $request->part_changes;
        $material->is_approved = $request->is_approved;
        $material->approved_date = $request->approved_date;
        $material->user_id_created = Auth::user()->id;
        $material->user_id_updated = Auth::user()->id;
        $material->save();

        Toastr::success('Manufacturing BOM Assy created.', 'Success');
        return redirect('engineering/m-bom/assy');
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
        $material = MBOMAssy::find($id);
        $data['material'] = $material;
        return view('admin.engineering.m-bom.edit', $data);
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
            'part_nha' => 'required',
            'part_name' => 'required',
            'quantity_part' => 'required',
        ]);

        $material = MBOMAssy::find(decrypt($id));
        $material->master_material_id = $request->master_material_id;
        $material->part_level = $request->part_level;
        $material->part_nha = $request->part_nha;
        $material->part_name = $request->part_name;
        $material->quantity_part = $request->quantity_part;
        $material->part_uom = $request->part_uom;
        $material->part_type = $request->part_type;
        $material->part_symbol = $request->part_symbol;
        $material->part_changes = $request->part_changes;
        $material->is_approved = $request->is_approved;
        $material->approved_date = $request->approved_date;
        $material->user_id_updated = Auth::user()->id;
        $material->save();

        Toastr::success('Manufacturing BOM updated.', 'Success');
        return redirect('engineering/m-bom/assy');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MBOMAssy::find(decrypt($id))->delete();
        Toastr::success('Material Deleted.', 'Success');

        $materials = MBOMAssy::orderBy('created_at','desc')->get();
        $data['materials'] = $materials;
        return view('admin.engineering.m-bom.index', $data);
    }

    public function approval()
    {
        $materials = MBOMAssy::orderBy('created_at','desc')->get();
        $data['materials'] = $materials;
        return view('admin.engineering.m-bom.index-approval', $data);
    }

    public function editApproval($id)
    {
        $material = MBOMAssy::find($id);
        $data['material'] = $material;
        return view('admin.engineering.m-bom.edit-approval', $data);
    }

    public function updateApproval(Request $request, $id)
    {
        $material = MBOMAssy::find(decrypt($id));
        $material->is_approved = $request->is_approved;
        $material->user_id_updated = Auth::user()->id;
        $material->save();

        Toastr::success('Approval updated.', 'Success');
        return redirect('engineering/m-bom/approval');
    }
}
