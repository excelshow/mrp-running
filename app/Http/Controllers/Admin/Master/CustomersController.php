<?php

namespace App\Http\Controllers\Admin\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\MasterCustomer;
use Kamaln7\Toastr\Facades\Toastr;
use Auth;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = MasterCustomer::orderBy('created_at', 'desc')->get();
        $data['customers'] = $customers;
        return view('admin.master.customers.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.master.customers.create');
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
            'number' => 'required',
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);

        $customer = new MasterCustomer();
        $customer->number = $request->number;
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->fax = $request->fax;
        $customer->phone = $request->phone;
        $customer->city = $request->city;
        $customer->country = $request->country;
        $customer->zip = $request->zip;
        $customer->product_type = $request->product_type;
        $customer->user_id_created = Auth::user()->id;
        $customer->user_id_updated = Auth::user()->id;
        $customer->save();

        Toastr::success('Customer created.', 'Success');
        return redirect('master/reference/customers');
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
        $customer = MasterCustomer::find($id);
        $data['customer'] = $customer;
        return view('admin.master.customers.edit', $data);
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
            'number' => 'required',
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);

        $customer = MasterCustomer::find(decrypt($id));
        $customer->number = $request->number;
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->fax = $request->fax;
        $customer->phone = $request->phone;
        $customer->city = $request->city;
        $customer->country = $request->country;
        $customer->zip = $request->zip;
        $customer->product_type = $request->product_type;
        $customer->user_id_updated = Auth::user()->id;
        $customer->save();

        Toastr::success('Customer updated.', 'Success');
        return redirect('master/reference/customers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MasterCustomer::find(decrypt($id))->delete();
        Toastr::success('Customer deleted.', 'Success');

        $customers = MasterCustomer::orderBy('created_at', 'desc')->get();
        $data['customers'] = $customers;
        return view('admin.master.customers.index', $data);
    }
}
