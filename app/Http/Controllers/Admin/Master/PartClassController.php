<?php

namespace App\Http\Controllers\Admin\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\MasterPartClass;
use Kamaln7\Toastr\Facades\Toastr;
use Auth;

class PartClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parts = MasterPartClass::all();
        $data['parts'] = $parts;
        return view('admin.master.part-class.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.master.part-class.create');
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
            'classification' => 'required',
        ]);

        $part = new MasterPartClass();
        $part->code = $request->code;
        $part->name = $request->name;
        $part->classification = $request->classification;
        $part->user_id_created = Auth::user()->id;
        $part->user_id_updated = Auth::user()->id;
        $part->save();

        Toastr::success('Part class created.', 'Success');
        return redirect('master/reference/part-class');
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
        $part = MasterPartClass::find($id);
        $data['part'] = $part;
        return view('admin.master.part-class.edit', $data);
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
            'classification' => 'required',
        ]);

        $part = MasterPartClass::find(decrypt($id));
        $part->code = $request->code;
        $part->name = $request->name;
        $part->classification = $request->classification;
        $part->user_id_updated = Auth::user()->id;
        $part->save();

        Toastr::success('Part class updated.', 'Success');
        return redirect('master/reference/part-class');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MasterPartClass::find(decrypt($id))->delete();
        Toastr::success('Part class deleted.', 'Success');

        $parts = MasterPartClass::all();
        $data['parts'] = $parts;
        return view('admin.master.part-class.index', $data);
    }
}
