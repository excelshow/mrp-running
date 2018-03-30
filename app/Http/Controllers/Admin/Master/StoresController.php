<?php

namespace App\Http\Controllers\Admin\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\MasterStore;
use Kamaln7\Toastr\Facades\Toastr;
use Auth;

class StoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = MasterStore::all();
        $data['stores'] = $stores;
        return view('admin.master.stores.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.master.stores.create');
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

        $store = new MasterStore();
        $store->code = $request->code;
        $store->name = $request->name;
        $store->user_id_created = Auth::user()->id;
        $store->user_id_updated = Auth::user()->id;
        $store->save();

        Toastr::success('Store created.', 'Success');
        return redirect('master/reference/stores');
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
        $store = MasterStore::find($id);
        $data['store'] = $store;
        return view('admin.master.stores.edit', $data);
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

        $store = MasterStore::find(decrypt($id));
        $store->code = $request->code;
        $store->name = $request->name;
        $store->user_id_updated = Auth::user()->id;
        $store->save();

        Toastr::success('Store updated.', 'Success');
        return redirect('master/reference/stores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MasterStore::find(decrypt($id))->delete();
        Toastr::success('Store deleted.', 'Success');

        $stores = MasterStore::all();
        $data['stores'] = $stores;
        return view('admin.master.stores.index', $data);
    }
}
