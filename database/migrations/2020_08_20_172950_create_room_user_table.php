<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoomUserTable extends Migration {

	public function up()
	{
		Schema::create('room_user', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('room_id')->unsigned();
			$table->integer('user_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('room_user');
	}
}
