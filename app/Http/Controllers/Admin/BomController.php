<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BomController extends Controller
{
    //
    public function index()
    {
        //
        return view('admin.bom.index');
    }
    public function create()
    {
        //
        return view('admin.bom.create');
    }
}
