<?php

namespace App\Http\Controllers\Admin\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\MasterKurs;
use Kamaln7\Toastr\Facades\Toastr;
use Auth;
class KursController extends Controller
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
        return view('admin.master.kurs.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.master.kurs.create');
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
            'currency' => 'required',
            'date' => 'required',
            'sell' => 'required',
            'middle' => 'required',
            'buy' => 'required',
        ]);

        $event = new MasterKurs();
        $event->currency = $request->currency;
        $event->date = $request->date;
        $event->sell = $request->sell;
        $event->middle = $request->middle;
        $event->buy = $request->buy;
        $event->user_id_created = Auth::user()->id;
        $event->user_id_updated = Auth::user()->id;
        $event->save();

        Toastr::success('Kurs created.', 'Success');
        return redirect('master/kurs');
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
        $kur = MasterKurs::find($id);
        $data['kur'] = $kur;
        return view('admin.master.kurs.edit', $data);
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
            'currency' => 'required',
            'date' => 'required',
            'sell' => 'required',
            'middle' => 'required',
            'buy' => 'required',
        ]);

        $event = MasterKurs::find(decrypt($id));
        $event->currency = $request->currency;
        $event->date = $request->date;
        $event->sell = $request->sell;
        $event->middle = $request->middle;
        $event->buy = $request->buy;
        $event->user_id_created = Auth::user()->id;
        $event->user_id_updated = Auth::user()->id;
        $event->save();

        Toastr::success('Kurs updated.', 'Success');
        return redirect('master/kurs');
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
