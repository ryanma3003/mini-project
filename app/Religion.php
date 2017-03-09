<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Religion extends Model {

	protected $table = 'religion';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = ['religion_name'];

	public function religion()
	{
		return $this->hasMany('App\Candidate', 'id_religion');
	}

}