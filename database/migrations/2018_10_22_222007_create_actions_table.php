<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionsTable extends Migration
{

    public function up()
    {
        Schema::create('actions', function(Blueprint $table) {
            // Schema declaration
            $table->increments('id');
            $table->string("name");
            $table->string("description");
            $table->json("meta");
            $table->timestamps();
            // Constraints declaration

        });
    }

    public function down()
    {
        Schema::drop('actions');
    }
}
