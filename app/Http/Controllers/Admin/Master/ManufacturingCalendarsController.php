<?php

namespace App\Http\Controllers\Admin\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\ManufacturingCalendar;
use Kamaln7\Toastr\Facades\Toastr;
use Auth;

class ManufacturingCalendarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calendars = ManufacturingCalendar::orderBy('created_at', 'desc')->get();
        $data['calendars'] = $calendars;
        return view('admin.master.manufacturing-calendars.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.master.manufacturing-calendars.create');
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
            'date' => 'required',
        ]);

        $calendar = new ManufacturingCalendar();
        $calendar->name = $request->name;
        $calendar->description = $request->description;
        $calendar->date = $request->date;
        $calendar->user_id_created = Auth::user()->id;
        $calendar->user_id_updated = Auth::user()->id;
        $calendar->save();

        Toastr::success('New date created.', 'Success');
        return redirect('master/reference/manufacturing-calendars');
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
        $calendar = ManufacturingCalendar::find($id);
        $data['calendar'] = $calendar;
        return view('admin.master.manufacturing-calendars.edit', $data);
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
            'date' => 'required',
        ]);

        $calendar = ManufacturingCalendar::find(decrypt($id));
        $calendar->name = $request->name;
        $calendar->description = $request->description;
        $calendar->date = $request->date;
        $calendar->user_id_updated = Auth::user()->id;
        $calendar->save();

        Toastr::success('Date updated.', 'Success');
        return redirect('master/reference/manufacturing-calendars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ManufacturingCalendar::find(decrypt($id))->delete();
        Toastr::success('Date deleted.', 'Success');

        $calendars = ManufacturingCalendar::orderBy('created_at', 'desc')->get();
        $data['calendars'] = $calendars;
        return view('admin.master.manufacturing-calendars.index', $data);
    }
}
