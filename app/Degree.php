<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Degree extends Model {

	protected $table = 'degree';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = ['lastest_degree'];

	public function degree()
	{
		return $this->hasMany('App\Candidate', 'id_degree');
	}

}