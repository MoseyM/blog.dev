<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWhackamoleScoresTable extends Migration {

	public function up()
	{
		Schema::create('whackamoleScores', function(Blueprint $table) 
		{
			$table->increments('id');
			$table->string('score');
			$table->timestamps();
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('whackamoleUsers');
		});	
	}

	public function down()
	{
		Schema::drop('whackamoleScores');
	}

}
