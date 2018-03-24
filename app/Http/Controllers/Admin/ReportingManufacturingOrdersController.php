<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportingManufacturingOrdersController extends Controller
{
    public function index(){
    	return view('admin.manufacturing.reporting.manufacturing-orders.index');
    }
}
