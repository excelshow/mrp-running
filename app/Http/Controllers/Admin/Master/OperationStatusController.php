<?php

namespace App\Http\Controllers\Admin\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\MasterOperationStatus;
use Kamaln7\Toastr\Facades\Toastr;
use Auth;

class OperationStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operations = MasterOperationStatus::orderBy('created_at', 'desc')->get();
        $data['operations'] = $operations;
        return view('admin.master.operation-status.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.master.operation-status.create');
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
            'status_code' => 'required',
        ]);

        $operation = new MasterOperationStatus();
        $operation->name = $request->name;
        $operation->description = $request->description;
        $operation->status_code = $request->status_code;
        $operation->user_id_created = Auth::user()->id;
        $operation->user_id_updated = Auth::user()->id;
        $operation->save();

        Toastr::success('Operation status created.', 'Success');
        return redirect('master/reference/operation-status');
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
        $operation = MasterOperationStatus::find($id);
        $data['operation'] = $operation;
        return view('admin.master.operation-status.edit', $data);
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
            'status_code' => 'required',
        ]);

        $operation = MasterOperationStatus::find(decrypt($id));
        $operation->name = $request->name;
        $operation->description = $request->description;
        $operation->status_code = $request->status_code;
        $operation->user_id_updated = Auth::user()->id;
        $operation->save();

        Toastr::success('Operation status updated.', 'Success');
        return redirect('master/reference/operation-status');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MasterOperationStatus::find(decrypt($id))->delete();
        Toastr::success('Operation status deleted.', 'Success');

        $operations = MasterOperationStatus::orderBy('created_at', 'desc')->get();
        $data['operations'] = $operations;
        return view('admin.master.operation-status.index', $data);
    }
}
