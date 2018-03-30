<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkOrder extends Model
{
    //
    protected $table = 'work-order';
    public static function datatables(){
    	return static::select('id','created_at','updated_at')->get();
    }
}
