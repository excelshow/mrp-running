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
        $kurs = MasterKurs::all();
        $data['kurs'] = $kurs;
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
            'currency' => 'required',
            'date' => 'required',
            'sell' => 'required',
            'middle' => 'required',
            'buy' => 'required',
        ]);

        $kur = new MasterKurs();
        $kur->currency = $request->currency;
        $kur->date = $request->date;
        $kur->sell = $request->sell;
        $kur->middle = $request->middle;
        $kur->buy = $request->buy;
        $kur->user_id_created = Auth::user()->id;
        $kur->user_id_updated = Auth::user()->id;
        $kur->save();

        Toastr::success('Kurs created.', 'Success');
        return redirect('master/reference/kurs');
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
        $this->validate($request, [
            'currency' => 'required',
            'date' => 'required',
            'sell' => 'required',
            'middle' => 'required',
            'buy' => 'required',
        ]);

        $kur = MasterKurs::find(decrypt($id));
        $kur->currency = $request->currency;
        $kur->date = $request->date;
        $kur->sell = $request->sell;
        $kur->middle = $request->middle;
        $kur->buy = $request->buy;
        $kur->user_id_updated = Auth::user()->id;
        $kur->save();

        Toastr::success('Kurs updated.', 'Success');
        return redirect('master/reference/kurs');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MasterKurs::find(decrypt($id))->delete();
        flash('Kurs Deleted.')->success();

        $kurs = MasterKurs::all();
        $data['kurs'] = $kurs;
        return view('admin.master.kurs.index', $data);
    }
}
