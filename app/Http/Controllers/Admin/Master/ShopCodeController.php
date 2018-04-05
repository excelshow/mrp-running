<?php

namespace App\Http\Controllers\Admin\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\MasterShopCode;
use Kamaln7\Toastr\Facades\Toastr;
use Auth;

class ShopCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shopCodes = MasterShopCode::orderBy('created_at', 'desc')->get();
        $data['shopCodes'] = $shopCodes;
        return view('admin.master.shop-code.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.master.shop-code.create');
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
            'name' => 'required',
            'description' => 'required',
            'status_code' => 'required',
        ]);

        $shop = new MasterShopCode();
        $shop->name = $request->name;
        $shop->description = $request->description;
        $shop->status_code = $request->status_code;
        $shop->user_id_created = Auth::user()->id;
        $shop->user_id_updated = Auth::user()->id;
        $shop->save();

        Toastr::success('Status code created.', 'Success');
        return redirect('master/reference/shop-code');
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
        $shopCode = MasterShopCode::find($id);
        $data['shopCode'] = $shopCode;
        return view('admin.master.shop-code.edit', $data);
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
            'name' => 'required',
            'description' => 'required',
            'status_code' => 'required',
        ]);

        $shop = MasterShopCode::find(decrypt($id));
        $shop->name = $request->name;
        $shop->description = $request->description;
        $shop->status_code = $request->status_code;
        $shop->user_id_updated = Auth::user()->id;
        $shop->save();

        Toastr::success('Shop code updated.', 'Success');
        return redirect('master/reference/shop-code');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MasterShopCode::find(decrypt($id))->delete();
        Toastr::success('Shop code deleted.', 'Success');

        $shopCodes = MasterShopCode::orderBy('created_at', 'desc')->get();
        $data['shopCodes'] = $shopCodes;
        return view('admin.master.shop-code.index', $data);
    }
}
