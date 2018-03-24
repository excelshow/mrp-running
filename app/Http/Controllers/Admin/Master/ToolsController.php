<?php

namespace App\Http\Controllers\Admin\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ToolsController extends Controller
{
    //
    public function index()
    {
        return view('admin.master.tools.index');
    }
      //
    public function create()
    {
        return view('admin.master.tools.create');
    }
}
