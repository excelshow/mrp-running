<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InventoryController extends Controller
{
    public function operations() {
    	return view('admin.inventory.operations.index');
    }
    public function reporting() {
    	return view('admin.inventory.reporting.index');
    }
}
