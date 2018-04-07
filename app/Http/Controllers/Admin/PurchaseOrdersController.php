<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\PurchaseOrder;
use Kamaln7\Toastr\Facades\Toastr;
use Auth;

class PurchaseOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labors = PurchaseOrder::orderBy('created_at', 'desc')->get();
        $data['labors'] = $labors;
        return view('admin.purchasing.purchase-orders.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.purchasing.purchase-orders.create');
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

        $labor = new PurchaseOrder();
        $labor->employee_id = $request->employee_id;
        $labor->name = $request->name;
        $labor->user_id_created = Auth::user()->id;
        $labor->user_id_updated = Auth::user()->id;
        $labor->save();

        Toastr::success('Labor created.', 'Success');
        return redirect('purchasing/purchase-orders');
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
        $labor = PurchaseOrder::find($id);
        $data['labor'] = $labor;
        return view('admin.purchasing.purchase-orders.edit', $data);
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

        $labor = PurchaseOrder::find(decrypt($id));
        $labor->employee_id = $request->employee_id;
        $labor->name = $request->name;
        $labor->user_id_updated = Auth::user()->id;
        $labor->save();

        Toastr::success('Labor updated.', 'Success');
        return redirect('purchasing/purchase-orders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PurchaseOrder::find(decrypt($id))->delete();
        Toastr::success('Labor deleted.', 'Success');

        $labors = PurchaseOrder::orderBy('created_at', 'desc')->get();
        $data['labors'] = $labors;
        return view('admin.purchasing.purchase-orders.index', $data);
    }
}
