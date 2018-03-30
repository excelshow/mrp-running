<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Controllers\Controller;
use App\SalesContract;
use App\WorkOrder;
use App\RouteNHA;
class WorkOrderController extends Controller
{
    /**
     * Display a listing of the resource.\
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.production.create_order.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $routenha = RouteNHA::All();
        $salescontract = SalesContract::All();
        return view('admin.production.create_order.create',compact('routenha','salescontract'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $WorkOrder = new WorkOrder;
        $WorkOrder->id_part_next_higher_assy = $request->id_part_next_higher_assy;
        $WorkOrder->part_number = $request->part_number;
        $WorkOrder->part_next_high_assy = $request->next_higher_assy;
        $WorkOrder->route_revisi = $request->route_revisi;
        $WorkOrder->part_id = $request->part_id;
        $WorkOrder->part_serial_number = $request->part_serial_number;
        $WorkOrder->part_name = $request->part_name;
        $WorkOrder->unit_of_measure = $request->unit_of_measure;
        $WorkOrder->shop = $request->shop;
        $WorkOrder->shop_destination = $request->shop_destination;
        $WorkOrder->quantity_work_order = $request->quantity_work_order;
        $WorkOrder->estimated_start_date = $request->estimated_start_date;
        $WorkOrder->estimated_complation_date = $request->estimated_complation_date;
        $WorkOrder->customer_code = $request->customer_code;
        $WorkOrder->work_order_type = $request->work_order_type;
        $WorkOrder->work_order_status = $request->work_order_status;
        $WorkOrder->no_sales_contract = $request->no_sales_contract;
        $WorkOrder->save();
        return redirect()->route( 'work-order.index' )->with('message','work order created successfully');

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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    
{        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $workorder = WorkOrder::find($id);
        $workorder->delete();
        session()->flash('message','Delete Successfully');
        return redirect('/work-order');
    }
    public function getData()
    {
        return Datatables::of(WorkOrder::datatables())
        ->addColumn( 'action', function ( $WorkOrder ) {
            $edit_url = route('work-order.edit', $WorkOrder->id );
            $delete_url = route('work-order.destroy', $WorkOrder->id);
            $data['edit_url']   = $edit_url;
            $data['delete_url'] = $delete_url;
            $data['id'] = $WorkOrder->id;
            return view('admin.forms.action', $data);
        })
        ->make(true);
    }
}
