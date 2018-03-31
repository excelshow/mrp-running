<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Carbon;
use App\SalesOrder;
use Kamaln7\Toastr\Facades\Toastr;
use Auth;

class SalesOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = SalesOrder::all();
        $data['orders'] = $orders;
        return view('admin.sales.orders.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sales.orders.create');
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
            'order_number' => 'required',
            'inquiry_type' => 'required',
            'customer_code' => 'required',
            'customer_name' => 'required',
            'currency_id' => 'required',
        ]);

        $order = new SalesOrder();
        $order->order_number = $request->order_number;
        $order->inquiry_type = $request->inquiry_type;
        $order->customer_code = $request->customer_code;
        $order->customer_name = $request->customer_name;
        $order->customer_address = $request->customer_address;
        $order->customer_director = $request->customer_director;
        $order->customer_postal = $request->customer_postal;
        $order->total_price = $request->total_price;
        $order->tax = $request->tax;
        $order->discount = $request->discount;
        $order->currency_id = $request->currency_id;
        $order->price_date = $request->price_date;
        $order->delivery_date = $request->delivery_date;
        $order->delivery_plant = $request->delivery_plant;
        $order->delivery_volume = $request->delivery_volume;
        $order->contract_start = $request->contract_start;
        $order->contract_end = $request->contract_end;
        $order->document_type = $request->document_type;
        $order->description = $request->description;
        $order->is_approve = $request->is_approve;
        $order->approval_date = $request->approval_date;
        $order->status = $request->status;
        $order->total_weight = $request->total_weight;
        $order->weight_uom = $request->weight_uom;
        $order->delivery_block = $request->delivery_block;
        $order->bill_block = $request->bill_block;
        $order->user_id_created = Auth::user()->id;
        $order->user_id_updated = Auth::user()->id;
        $order->save();

        Toastr::success('Order created.', 'Success');
        return redirect('sales/orders');
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
        $order = SalesOrder::find($id);
        $data['order'] = $order;
        return view('admin.sales.orders.edit', $data);
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
            'order_number' => 'required',
            'inquiry_type' => 'required',
            'customer_code' => 'required',
            'customer_name' => 'required',
            'currency_id' => 'required',
        ]);

        $order = SalesOrder::find(decrypt($id));
        $order->order_number = $request->order_number;
        $order->inquiry_type = $request->inquiry_type;
        $order->customer_code = $request->customer_code;
        $order->customer_name = $request->customer_name;
        $order->customer_address = $request->customer_address;
        $order->customer_director = $request->customer_director;
        $order->customer_postal = $request->customer_postal;
        $order->total_price = $request->total_price;
        $order->tax = $request->tax;
        $order->discount = $request->discount;
        $order->currency_id = $request->currency_id;
        $order->price_date = $request->price_date;
        $order->delivery_date = $request->delivery_date;
        $order->delivery_plant = $request->delivery_plant;
        $order->delivery_volume = $request->delivery_volume;
        $order->contract_start = $request->contract_start;
        $order->contract_end = $request->contract_end;
        $order->document_type = $request->document_type;
        $order->description = $request->description;
        $order->is_approve = $request->is_approve;
        $order->approval_date = $request->approval_date;
        $order->status = $request->status;
        $order->total_weight = $request->total_weight;
        $order->weight_uom = $request->weight_uom;
        $order->delivery_block = $request->delivery_block;
        $order->bill_block = $request->bill_block;
        $order->user_id_updated = Auth::user()->id;
        $order->save();

        Toastr::success('Order updated.', 'Success');
        return redirect('sales/orders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SalesOrder::find(decrypt($id))->delete();
        Toastr::success('Order deleted.', 'Success');

        $orders = SalesOrder::all();
        $data['orders'] = $orders;
        return view('admin.sales.orders.index', $data);
    }
}
