<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialsTable extends Migration
{

    public function up()
    {
        Schema::create('materials', function(Blueprint $table) {
            // Schema declaration
            $table->increments('id');
            $table->string("name");
            $table->string("description");
            $table->integer("polygons");
            $table->json("meta");
            $table->timestamps();
            // Constraints declaration

        });
    }

    public function down()
    {
        Schema::drop('materials');
    }
}
