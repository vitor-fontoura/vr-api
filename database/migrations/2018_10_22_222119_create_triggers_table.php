<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggersTable extends Migration
{

    public function up()
    {
        Schema::create('triggers', function(Blueprint $table) {
            // Schema declaration
            $table->increments('id');
            $table->enum("type", ["time", "player"]);
            $table->integer("repeatable")->nullable();
            $table->time("cooldown")->nullable();
            $table->integer("action_id")->unsigned();
            $table->timestamps();
            // Constraints declaration
            $table->foreign("action_id")
                  ->references("id")
                  ->on("actions");

        });
    }

    public function down()
    {
        Schema::drop('triggers');
    }
}
