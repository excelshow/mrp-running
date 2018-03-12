<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RetOrderController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.retorder.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.retorder.create');
    }
     public function show($id)
    {
        //
         return view('admin.retorder.konfirmasi');
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
        $request->session()->flash('message', 'return order was successful!');
        $result = array(
                    'message' => 'return order created succesfully',
                );

                return response ()->json ($result);
    }
    public function confirm(Request $request)
    {
        //
        $request->session()->flash('message', 'retur order was confirmed!');
        $request->session()->flash('confirm', 'success');
        $result = array(
                    'message' => 'order was confirmed!',
                );

                return response ()->json ($result);
    }
      public function cancel(Request $request)
    {
        //
        $request->session()->flash('message', 'retur order was canceled!');
        $request->session()->flash('fail', 'true');
        $result = array(
                    'message' => 'retur order was canceled!',
                );

                return response ()->json ($result);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


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
        //
    }
}
