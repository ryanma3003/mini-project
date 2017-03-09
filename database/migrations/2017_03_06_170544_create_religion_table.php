<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReligionTable extends Migration {
	/**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		Schema::create('religion', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('religion_name', 20);
		});
	}

	public function down()
	{
		Schema::drop('religion');
	}
}