<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\WorkCenter;
use Kamaln7\Toastr\Facades\Toastr;
use Auth;

class WorkCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = WorkCenter::orderBy('created_at', 'desc')->get();
        $data['works'] = $works;
        return view('admin.planning.work-center.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.planning.work-center.create');
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
            'machine_id' => 'required',
            'location_id' => 'required',
            'asset_number' => 'required',
        ]);

        $work = new WorkCenter();
        $work->number = $request->number;
        $work->machine_id = $request->machine_id;
        $work->asset_number = $request->asset_number;
        $work->description = $request->description;
        $work->category = $request->category;
        $work->location_id = $request->location_id;
        $work->utilization = $request->utilization;
        $work->total_shift = $request->total_shift;
        $work->queue_time = $request->queue_time;
        $work->setup_time = $request->setup_time;
        $work->execution_time = $request->execution_time;
        $work->capacity_time = $request->capacity_time;
        $work->start_time_1 = $request->start_time_1;
        $work->stop_time_1 = $request->stop_time_1;
        $work->brake_time_1 = $request->brake_time_1;
        $work->start_time_2 = $request->start_time_2;
        $work->stop_time_2 = $request->stop_time_2;
        $work->brake_time_2 = $request->brake_time_2;
        $work->start_time_3 = $request->start_time_3;
        $work->stop_time_3 = $request->stop_time_3;
        $work->brake_time_3 = $request->brake_time_3;
        $work->total_machine = $request->total_machine;
        $work->total_labor = $request->total_labor;
        $work->processing = $request->processing;
        $work->user_id_created = Auth::user()->id;
        $work->user_id_updated = Auth::user()->id;
        $work->save();

        Toastr::success('Work center created.', 'Success');
        return redirect('planning/work-center');
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
        $work = WorkCenter::find($id);
        $data['work'] = $work;
        return view('admin.planning.work-center.edit', $data);
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
            'machine_id' => 'required',
            'location_id' => 'required',
            'asset_number' => 'required',
        ]);

        $work = WorkCenter::find(decrypt($id));
        $work->number = $request->number;
        $work->machine_id = $request->machine_id;
        $work->asset_number = $request->asset_number;
        $work->description = $request->description;
        $work->category = $request->category;
        $work->location_id = $request->location_id;
        $work->utilization = $request->utilization;
        $work->total_shift = $request->total_shift;
        $work->queue_time = $request->queue_time;
        $work->setup_time = $request->setup_time;
        $work->execution_time = $request->execution_time;
        $work->capacity_time = $request->capacity_time;
        $work->start_time_1 = $request->start_time_1;
        $work->stop_time_1 = $request->stop_time_1;
        $work->brake_time_1 = $request->brake_time_1;
        $work->start_time_2 = $request->start_time_2;
        $work->stop_time_2 = $request->stop_time_2;
        $work->brake_time_2 = $request->brake_time_2;
        $work->start_time_3 = $request->start_time_3;
        $work->stop_time_3 = $request->stop_time_3;
        $work->brake_time_3 = $request->brake_time_3;
        $work->total_machine = $request->total_machine;
        $work->total_labor = $request->total_labor;
        $work->processing = $request->processing;
        $work->user_id_updated = Auth::user()->id;
        $work->save();

        Toastr::success('Work center updated.', 'Success');
        return redirect('planning/work-center');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        WorkCenter::find(decrypt($id))->delete();
        Toastr::success('Work center deleted.', 'Success');

        $works = WorkCenter::orderBy('created_at', 'desc')->get();
        $data['works'] = $works;
        return view('admin.planning.work-center.index', $data);
    }
}
