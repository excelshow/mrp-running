<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Location;
use Kamaln7\Toastr\Facades\Toastr;
use Auth;

class LocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::orderBy('created_at', 'desc')->get();
        $data['locations'] = $locations;
        return view('admin.planning.locations.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.planning.locations.create');
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
            'code' => 'required',
            'name' => 'required',
        ]);

        $labor = new Location();
        $labor->code = $request->code;
        $labor->name = $request->name;
        $labor->user_id_created = Auth::user()->id;
        $labor->user_id_updated = Auth::user()->id;
        $labor->save();

        Toastr::success('Location created.', 'Success');
        return redirect('planning/locations');
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
        $location = Location::find($id);
        $data['location'] = $location;
        return view('admin.planning.locations.edit', $data);
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
            'code' => 'required',
            'name' => 'required',
        ]);

        $labor = Location::find(decrypt($id));
        $labor->code = $request->code;
        $labor->name = $request->name;
        $labor->user_id_updated = Auth::user()->id;
        $labor->save();

        Toastr::success('Location updated.', 'Success');
        return redirect('planning/locations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Location::find(decrypt($id))->delete();
        Toastr::success('Location deleted.', 'Success');

        $locations = Location::orderBy('created_at', 'desc')->get();
        $data['locations'] = $locations;
        return view('admin.planning.locations.index', $data);
    }
}
