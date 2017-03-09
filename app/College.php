<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class College extends Model {

	protected $table = 'college';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = ['college_name'];

	public function college()
	{
		return $this->hasMany('App\Candidate', 'id_college');
	}

}