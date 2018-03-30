<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\MasterMachine;
use Kamaln7\Toastr\Facades\Toastr;
use Auth;

class MachinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $machines = MasterMachine::orderBy('created_at', 'desc')->get();
        $data['machines'] = $machines;
        return view('admin.planning.machines.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.planning.machines.create');
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
            'number' => 'required',
            'name' => 'required',
            'employee_leader_id' => 'required',
        ]);

        $machine = new MasterMachine();
        $machine->number = $request->number;
        $machine->name = $request->name;
        $machine->total_machine = $request->total_machine;
        $machine->total_shift = $request->total_shift;
        $machine->employee_leader_id = $request->employee_leader_id;
        $machine->user_id_created = Auth::user()->id;
        $machine->user_id_updated = Auth::user()->id;
        $machine->save();

        Toastr::success('Machine created.', 'Success');
        return redirect('planning/machines');
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
        $machine = MasterMachine::find($id);
        $data['machine'] = $machine;
        return view('admin.planning.machines.edit', $data);
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
            'number' => 'required',
            'name' => 'required',
            'employee_leader_id' => 'required',
        ]);

        $machine = MasterMachine::find(decrypt($id));
        $machine->number = $request->number;
        $machine->name = $request->name;
        $machine->total_machine = $request->total_machine;
        $machine->total_shift = $request->total_shift;
        $machine->employee_leader_id = $request->employee_leader_id;
        $machine->user_id_updated = Auth::user()->id;
        $machine->save();

        Toastr::success('Machine updated.', 'Success');
        return redirect('planning/machines');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MasterMachine::find(decrypt($id))->delete();
        flash('Machine Deleted.')->success();

        $machines = MasterMachine::orderBy('created_at', 'desc')->get();
        $data['machines'] = $machines;
        return view('admin.planning.machines.index', $data);
    }
}
