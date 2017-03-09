<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {
	/**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		Schema::table('candidate', function(Blueprint $table) {
			$table->foreign('id_college')->references('id')->on('college')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('candidate', function(Blueprint $table) {
			$table->foreign('id_degree')->references('id')->on('degree')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('candidate', function(Blueprint $table) {
			$table->foreign('id_status')->references('id')->on('status')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('candidate', function(Blueprint $table) {
			$table->foreign('id_religion')->references('id')->on('religion')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('candidate', function(Blueprint $table) {
			$table->dropForeign('candidate_id_college_foreign');
		});
		Schema::table('candidate', function(Blueprint $table) {
			$table->dropForeign('candidate_id_degree_foreign');
		});
		Schema::table('candidate', function(Blueprint $table) {
			$table->dropForeign('candidate_id_status_foreign');
		});
		Schema::table('candidate', function(Blueprint $table) {
			$table->dropForeign('candidate_id_religion_foreign');
		});
	}
}