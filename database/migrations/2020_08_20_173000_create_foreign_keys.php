<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('room_user', function(Blueprint $table) {
			$table->foreign('room_id')->references('id')->on('rooms')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('room_user', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('messages', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('messages', function(Blueprint $table) {
			$table->foreign('room_id')->references('id')->on('rooms')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('room_user', function(Blueprint $table) {
			$table->dropForeign('room_user_room_id_foreign');
		});
		Schema::table('room_user', function(Blueprint $table) {
			$table->dropForeign('room_user_user_id_foreign');
		});
		Schema::table('messages', function(Blueprint $table) {
			$table->dropForeign('messages_user_id_foreign');
		});
		Schema::table('messages', function(Blueprint $table) {
			$table->dropForeign('messages_room_id_foreign');
		});
	}
}