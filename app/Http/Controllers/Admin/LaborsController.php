<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\MasterLabor;
use Kamaln7\Toastr\Facades\Toastr;
use Auth;

class LaborsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labors = MasterLabor::orderBy('created_at', 'desc')->get();
        $data['labors'] = $labors;
        return view('admin.planning.labors.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.planning.labors.create');
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
            'employee_id' => 'required',
            'name' => 'required',
        ]);

        $labor = new MasterLabor();
        $labor->employee_id = $request->employee_id;
        $labor->name = $request->name;
        $labor->user_id_created = Auth::user()->id;
        $labor->user_id_updated = Auth::user()->id;
        $labor->save();

        Toastr::success('Labor created.', 'Success');
        return redirect('planning/labors');
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
        $labor = MasterLabor::find($id);
        $data['labor'] = $labor;
        return view('admin.planning.labors.edit', $data);
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
            'employee_id' => 'required',
            'name' => 'required',
        ]);

        $labor = MasterLabor::find(decrypt($id));
        $labor->employee_id = $request->employee_id;
        $labor->name = $request->name;
        $labor->user_id_updated = Auth::user()->id;
        $labor->save();

        Toastr::success('Labor updated.', 'Success');
        return redirect('planning/labors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MasterLabor::find(decrypt($id))->delete();
        Toastr::success('Labor deleted.', 'Success');

        $labors = MasterLabor::orderBy('created_at', 'desc')->get();
        $data['labors'] = $labors;
        return view('admin.planning.labors.index', $data);
    }
}
