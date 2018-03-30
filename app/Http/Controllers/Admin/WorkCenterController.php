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
            'employee_id' => 'required',
            'name' => 'required',
        ]);

        $work = new WorkCenter();
        $work->employee_id = $request->employee_id;
        $work->name = $request->name;
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
            'employee_id' => 'required',
            'name' => 'required',
        ]);

        $work = WorkCenter::find(decrypt($id));
        $work->employee_id = $request->employee_id;
        $work->name = $request->name;
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
