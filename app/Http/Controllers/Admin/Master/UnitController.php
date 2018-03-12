<?php

namespace App\Http\Controllers\Admin\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Model\Unit;
use Yajra\Datatables\Datatables;
use Response;
class UnitController extends Controller
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
        if(access('master','view')  == true){
           return view('admin.master.unit.index');
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
            return view('admin.master.unit.create');
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
            $unit = new Unit;
             $this->validate($request, [
                'name' => 'required|max:20|unique:unit',
                'description' => 'required|max:100'
            ]);
            $unit->name = $request->name;
            $unit->description = $request->description;
            $unit->save();
            
           return redirect()->route( 'master.unit.index' )->with('message','Unit created successfully');
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
            $unit = Unit::find($id);
            return view('admin.master.unit.edit', compact('unit'));
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
         if(access('role','edit')  == true){
            $unit = Unit::find($id);
            $this->validate($request, [
                'name' => 'required|max:20|',
                'description' => 'required|max:100'
            ]);
            $unit['name'] = $request->name;
            $unit['description'] = $request->description;
            $unit->save();
            session()->flash('message','Update Successfully');
            return redirect('/unit');   
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
            $unit = Unit::find($id);
        
            $unit->delete();
            session()->flash('message','Delete Successfully');
            return redirect('/unit');
        }
        else
        {
            return back();
        }
    }
       public function getData()
    {
        return Datatables::of(Unit::datatables())
        ->addColumn( 'action', function ( $unit ) {
            $edit_modal = $unit->id;
            $delete_url = route('master.unit.destroy', $unit->id);
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
