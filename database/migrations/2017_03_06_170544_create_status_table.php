<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatusTable extends Migration {
	/**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		Schema::create('status', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('marital_status', 20);
		});
	}

	public function down()
	{
		Schema::drop('status');
	}
}