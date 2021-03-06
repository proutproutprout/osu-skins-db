<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('users', function(Blueprint $table) {
                $table->increments('id');
                $table->string("google_id");
                $table->string("email");
                $table->string("name");
                $table->integer("topaccess")->default(0);
                $table->string("refresh_token")->default(null);
                $table->string("remember_token")->default(null);
                $table->timestamps();
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	    Schema::drop('users');
	}

}
