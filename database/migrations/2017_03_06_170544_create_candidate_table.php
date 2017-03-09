<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCandidateTable extends Migration {
	/**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		Schema::create('candidate', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name', 50);
			$table->string('address', 200);
			$table->datetime('birthday');
			$table->string('jenis_kelamin', 15);
			$table->string('salary', 50);
			$table->string('thesis', 150);
			$table->integer('id_college')->unsigned();
			$table->integer('id_degree')->unsigned();
			$table->integer('id_status')->unsigned();
			$table->integer('id_religion')->unsigned();
			$table->string('phone_number', 15);
		});
	}

	public function down()
	{
		Schema::drop('candidate');
	}
}