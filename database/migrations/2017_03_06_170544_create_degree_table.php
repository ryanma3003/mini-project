<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDegreeTable extends Migration {
	/**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		Schema::create('degree', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('lastest_degree', 10);
		});
	}

	public function down()
	{
		Schema::drop('degree');
	}
}