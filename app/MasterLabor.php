<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterLabor extends Model
{
    protected $table = 'master-labors';
    
    protected $fillable = [
    	'employee_id',
    	'name',
    ];

    public function machines () {
		return $this->hasMany('App\MasterMachine', 'employee_labor_id');
	}
}
