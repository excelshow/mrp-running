<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterMachine extends Model
{
    protected $table = 'master-machines';

    protected $fillable = [
    	'number',
    	'name',
    	'total_machine',
    	'total_shift',
    	'employee_leader_id'
    ];

    public function labor () {
		return $this->belongsTo('App\MasterLabor', 'employee_leader_id');
	}
}
