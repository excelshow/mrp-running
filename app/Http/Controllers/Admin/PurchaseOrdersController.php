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
        $orders = PurchaseOrder::orderBy('created_at', 'desc')->get();
        $data['orders'] = $orders;
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
            'order_number' => 'required',
            'request_number' => 'required',
            'unit_price' => 'required',
            'quantity_order' => 'required',
            'currency_id' => 'required',
        ]);

        $order = new PurchaseOrder();
        $order->order_number = $request->order_number;
        $order->request_number = $request->request_number;
        $order->unit_price = $request->unit_price;
        $order->discount = $request->discount;
        $order->tax = $request->tax;
        $order->quantity_order = $request->quantity_order;
        $order->total_price = $request->total_price;
        $order->currency_id = $request->currency_id;
        $order->order_date = $request->order_date;
        $order->delivery_date = $request->delivery_date;
        $order->status = $request->status;
        $order->user_id_created = Auth::user()->id;
        $order->user_id_updated = Auth::user()->id;
        $order->save();

        Toastr::success('Purchase order created.', 'Success');
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
        $order = PurchaseOrder::find($id);
        $data['order'] = $order;
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
            'order_number' => 'required',
            'request_number' => 'required',
            'unit_price' => 'required',
            'quantity_order' => 'required',
            'currency_id' => 'required',
        ]);

        $order = PurchaseOrder::find(decrypt($id));
        $order->order_number = $request->order_number;
        $order->request_number = $request->request_number;
        $order->unit_price = $request->unit_price;
        $order->discount = $request->discount;
        $order->tax = $request->tax;
        $order->quantity_order = $request->quantity_order;
        $order->total_price = $request->total_price;
        $order->currency_id = $request->currency_id;
        $order->order_date = $request->order_date;
        $order->delivery_date = $request->delivery_date;
        $order->status = $request->status;
        $order->user_id_updated = Auth::user()->id;
        $order->save();

        Toastr::success('Purchase order updated.', 'Success');
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
        Toastr::success('Purchase order deleted.', 'Success');

        $orders = PurchaseOrder::orderBy('created_at', 'desc')->get();
        $data['orders'] = $orders;
        return view('admin.purchasing.purchase-orders.index', $data);
    }
}
