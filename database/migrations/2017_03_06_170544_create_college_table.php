<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCollegeTable extends Migration {
	/**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		Schema::create('college', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('college_name', 100);
		});
	}

	public function down()
	{
		Schema::drop('college');
	}
}