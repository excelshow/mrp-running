<?php

namespace App\Http\Controllers\Admin\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Model\Warehouse;
use Yajra\Datatables\Datatables;
use Response;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(access('master','view')  == true){
            return view('admin.master.warehouse.index');
        }
        else
        {
            return back();
        }
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         if ( access('master','create') == TRUE){
            return view('admin.master.warehouse.create');
        }
        else{
            return back();
        }
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
         if(access('master','create')  == true){
            $warehouse = new Warehouse;
             $this->validate($request, [
                'name' => 'required|max:20|unique:warehouse',
                'location' => 'required|max:100'
            ]);
            $warehouse->name = $request->name;
            $warehouse->location = $request->location;
            $warehouse->save();
            
           return redirect()->route( 'master.warehouse.index' )->with('message','Warehouse created successfully');
        }
        else{
            return back();
        }
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
          if(access('master','edit')  == true){
            $warehouse = Warehouse::find($id);
            return view('admin.master.warehouse.edit', compact('warehouse'));
        }
        else{
            return back();
        }
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
          if(access('master','edit')  == true){
            $warehouse = Warehouse::find($id);
            $this->validate($request, [
                'name' => 'required|max:20|unique:warehouse',
                'location' => 'required|max:100'
            ]);
            $warehouse['name'] = $request->name;
            $warehouse['location'] = $request->location;
            $warehouse->save();
            session()->flash('message','Update Successfully');
            return redirect('/warehouse');   
        }
        else{
            return back();
        }
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
          if(access('master','delete')  == true){
            $warehouse = Warehouse::find($id);
            $warehouse->delete();
            session()->flash('message','Delete Successfully');
            return redirect('/warehouse');
        }
        else
        {
            return back();
        }
    }
    public function getData()
    {
        return Datatables::of(Warehouse::datatables())
        ->addColumn( 'action', function ( $warehouse ) {
            $edit_modal =  $warehouse->id ;
            $delete_url = route('master.warehouse.destroy', $warehouse->id);
            $data['empty']='';
            if(access('master','edit') == true){
                $data['edit_modal']   = $edit_modal;
            }
            if(access('master','delete')  == true){
               $data['delete_url'] = $delete_url;
            }
            return view('admin.forms.action', $data);
        })
        ->make(true);
    }
}
