<?php

namespace App\Http\Controllers\Admin\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\MasterUnit;
use Kamaln7\Toastr\Facades\Toastr;
use Auth;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $units = MasterUnit::all();
        $data['units'] = $units;
        return view('admin.master.units.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.master.units.create');
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
            'name' => 'required',
            'description' => 'required',
        ]);

        $unit = new MasterUnit();
        $unit->name = $request->name;
        $unit->description = $request->description;
        $unit->user_id_created = Auth::user()->id;
        $unit->user_id_updated = Auth::user()->id;
        $unit->save();

        Toastr::success('Unit created.', 'Success');
        return redirect('master/reference/units');
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
        $unit = MasterUnit::find($id);
        $data['unit'] = $unit;
        return view('admin.master.units.edit', $data);
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
            'name' => 'required',
            'description' => 'required',
        ]);

        $unit = MasterUnit::find(decrypt($id));
        $unit->name = $request->name;
        $unit->description = $request->description;
        $unit->user_id_updated = Auth::user()->id;
        $unit->save();

        Toastr::success('Unit updated.', 'Success');
        return redirect('master/reference/units');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MasterUnit::find(decrypt($id))->delete();
        Toastr::success('Unit deleted.', 'Success');

        $units = MasterUnit::all();
        $data['units'] = $units;
        return view('admin.master.units.index', $data);
    }
}
