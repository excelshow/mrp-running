<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Carbon;
use App\SalesContract;
use Kamaln7\Toastr\Facades\Toastr;
use Auth;

class SalesContractsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contracts = SalesContract::all();
        $data['contracts'] = $contracts;
        return view('admin.sales.contracts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sales.contracts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mytime = Carbon\Carbon::now();
        $now = $mytime->toDateTimeString();

        $this->validate($request, [
            'sales_order_id' => 'required',
            'customer_id' => 'required',
            'contract_number' => 'required',
        ]);

        $contract = new SalesContract();
        $contract->sales_order_id = $request->sales_order_id;
        $contract->customer_id = $request->customer_id;
        $contract->contract_number = $request->contract_number;
        $contract->contract_from = $request->contract_from;
        $contract->contract_to = $request->contract_to;
        $contract->contract_value = $request->contract_value;
        $contract->currency_id = $request->currency_id;
        $contract->project_code = $request->project_code;
        $contract->project_name = $request->project_name;
        $contract->status = $request->status;
        $contract->user_id_created = Auth::user()->id;
        $contract->user_id_updated = Auth::user()->id;
        $contract->save();

        Toastr::success('Contract created.', 'Success');
        return redirect('sales/contracts');
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
        $contract = SalesContract::find($id);
        $data['contract'] = $contract;
        return view('admin.sales.contracts.edit', $data);
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
        $mytime = Carbon\Carbon::now();
        $now = $mytime->toDateTimeString();

        $this->validate($request, [
            'sales_order_id' => 'required',
            'customer_id' => 'required',
            'contract_number' => 'required',
        ]);

        $contract = SalesContract::find(decrypt($id));
        $contract->sales_order_id = $request->sales_order_id;
        $contract->customer_id = $request->customer_id;
        $contract->contract_number = $request->contract_number;
        $contract->contract_from = $request->contract_from;
        $contract->contract_to = $request->contract_to;
        $contract->contract_value = $request->contract_value;
        $contract->currency_id = $request->currency_id;
        $contract->project_code = $request->project_code;
        $contract->project_name = $request->project_name;
        $contract->status = $request->status;
        $contract->user_id_updated = Auth::user()->id;
        $contract->save();

        Toastr::success('Contract updated.', 'Success');
        return redirect('sales/contracts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SalesContract::find(decrypt($id))->delete();
        flash('Contract Deleted.')->success();

        $contracts = SalesContract::all();
        $data['contracts'] = $contracts;
        return view('admin.sales.contracts.index', $data);
    }
}
