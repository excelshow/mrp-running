<?php

namespace App\Http\Controllers\Admin\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\MasterSalesDocumentType;
use Kamaln7\Toastr\Facades\Toastr;
use Auth;

class SalesDocumentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = MasterSalesDocumentType::orderBy('created_at', 'desc')->get();
        $data['sales'] = $sales;
        return view('admin.master.sales-document-type.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.master.sales-document-type.create');
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
            'type_code' => 'required',
        ]);

        $sales = new MasterSalesDocumentType();
        $sales->name = $request->name;
        $sales->description = $request->description;
        $sales->type_code = $request->type_code;
        $sales->user_id_created = Auth::user()->id;
        $sales->user_id_updated = Auth::user()->id;
        $sales->save();

        Toastr::success('Sales document type created.', 'Success');
        return redirect('master/reference/sales-document-type');
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
        $sales = MasterSalesDocumentType::find($id);
        $data['sales'] = $sales;
        return view('admin.master.sales-document-type.edit', $data);
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
            'type_code' => 'required',
        ]);

        $sales = MasterSalesDocumentType::find(decrypt($id));
        $sales->name = $request->name;
        $sales->description = $request->description;
        $sales->type_code = $request->type_code;
        $sales->user_id_updated = Auth::user()->id;
        $sales->save();

        Toastr::success('Sales document type updated.', 'Success');
        return redirect('master/reference/sales-document-type');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MasterSalesDocumentType::find(decrypt($id))->delete();
        Toastr::success('Sales document type deleted.', 'Success');

        $sales = MasterSalesDocumentType::orderBy('created_at', 'desc')->get();
        $data['sales'] = $sales;
        return view('admin.master.sales-document-type.index', $data);
    }
}
