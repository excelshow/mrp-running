<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManufactureController extends Controller
{
    public function operations() {
    	return view('admin.manufacturing.operations.index');
    }
    public function reporting() {
    	return view('admin.manufacturing.operations.index');
    }
}
