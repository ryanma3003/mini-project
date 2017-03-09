<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Status extends Model {

	protected $table = 'status';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = ['marital_status'];

	public function status()
	{
		return $this->hasMany('App\Candidate', 'id_status');
	}

}