<?php

namespace App\Http\Controllers\Admin\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\MasterKoding;
use Kamaln7\Toastr\Facades\Toastr;
use Auth;
class KodingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kodings = MasterKoding::all();
        $data['kodings'] = $kodings;
        return view('admin.master.koding.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.master.koding.create');
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
            'description' => 'required',
        ]);

        $koding = new MasterKoding();
        $koding->code = $request->code;
        $koding->description = $request->description;
        $koding->user_id_created = Auth::user()->id;
        $koding->user_id_updated = Auth::user()->id;
        $koding->save();

        Toastr::success('Koding created.', 'Success');
        return redirect('master/reference/koding');
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
        $koding = MasterKoding::find($id);
        $data['koding'] = $koding;
        return view('admin.master.koding.edit', $data);
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
            'description' => 'required',
        ]);

        $koding = MasterKoding::find(decrypt($id));
        $koding->code = $request->code;
        $koding->description = $request->description;
        $koding->user_id_updated = Auth::user()->id;
        $koding->save();

        Toastr::success('Kurs updated.', 'Success');
        return redirect('master/reference/koding');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MasterKoding::find(decrypt($id))->delete();
        flash('Koding Deleted.')->success();

        $kodings = MasterKoding::all();
        $data['kodings'] = $kodings;
        return view('admin.master.koding.index', $data);
    }
}
