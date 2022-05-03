<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departmentsFactories extends Model {
	protected $table    = 'departmentsfactories';
	protected $fillable = [
		'dep_name_ar',
		'dep_name_en',
		'icon',
		'description',
		'keyword',
		'parent',
	];

	public function parents() {
		return $this->hasMany('App\departmentsFactories', 'id', 'parent');
	}

	

}
