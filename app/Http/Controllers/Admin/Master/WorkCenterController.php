<?php

namespace App\Http\Controllers\Admin\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkCenterController extends Controller
{
    //
     public function index()
    {
        return view('admin.master.workcenter.index');
    }
     public function create()
    {
        return view('admin.master.workcenter.create');
    }
}
