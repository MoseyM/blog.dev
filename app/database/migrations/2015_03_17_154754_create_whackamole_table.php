<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWhackamoleTable extends Migration {

	public function up()
	{
		Schema::create('whackamoleUsers', function(Blueprint $table) 
		{
			$table->increments('id');
			$table->string('username')->unique();
			$table->string('password');
			$table->timestamps();
			$table->rememberToken('remember_token', 100);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('whackamoleUsers');
	}

}
