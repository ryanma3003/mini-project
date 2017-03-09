<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\College;
use App\Degree;
use App\Religon;
use App\Status;

class Candidate extends Model {

	protected $table = 'candidate';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['birthday'];
	protected $fillable = ['name', 'address', 'birthday', 'jenis_kelamin', 'salary', 'thesis', 'id_college', 'id_degree', 'id_religion', 'id_status','phone_number'];

	public function college()
	{
		return $this->belongsTo('App\College', 'id_college');
	}

	public function degree()
	{
		return $this->belongsTo('App\Degree', 'id_degree');
	}

	public function religion()
	{
		return $this->belongsTo('App\Religion', 'id_religion');
	}

	public function status()
	{
		return $this->belongsTo('App\Status', 'id_status');
	}

	/*public function getNameAttribute($name)
	{
		return ucwords($name);
	}

	public function setNameAttribute($name)
	{
		return strtolower($name);
	}*/
}