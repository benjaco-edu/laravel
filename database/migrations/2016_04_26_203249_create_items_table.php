<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    public function up()
    {
        Schema::create('items', function(Blueprint $table){
            $table->increments('id');

            $table->integer('user_id');
            $table->string("name");
            $table->boolean("done");

            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::drop('items');
    }

}
    
    