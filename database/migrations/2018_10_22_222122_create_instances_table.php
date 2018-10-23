<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstancesTable extends Migration
{

    public function up()
    {
        Schema::create('instances', function(Blueprint $table) {
            // Schema declaration
            $table->increments('id');
            $table->integer("material_id")->unsigned();
            $table->integer("environment_id")->unsigned();
            $table->json("meta");
            $table->timestamps();
            // Constraints declaration
            $table->foreign("material_id")
                  ->references("id")
                  ->on("materials");
            $table->foreign("environment_id")
                  ->references("id")
                  ->on("environments");

        });
    }

    public function down()
    {
        Schema::drop('instances');
    }
}
