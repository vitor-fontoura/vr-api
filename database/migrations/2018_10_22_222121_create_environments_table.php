<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnvironmentsTable extends Migration
{

    public function up()
    {
        Schema::create('environments', function(Blueprint $table) {
            // Schema declaration
            $table->increments('id');
            $table->integer("scenario_id")->unsigned();
            $table->integer("user_id")->unsigned();
            $table->string("name");
            $table->string("description");
            $table->string("url");
            $table->json("meta");
            $table->timestamps();
            // Constraints declaration
            $table->foreign("scenario_id")
                  ->references("id")
                  ->on("scenarios");
            /*$table->foreign("user_id")
                  ->references("id")
                  ->on("users");*/

        });
    }

    public function down()
    {
        Schema::drop('Environment');
    }
}
