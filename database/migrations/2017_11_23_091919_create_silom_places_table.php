<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSilomPlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('silom_places', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('line');
            $table->string('station');
            $table->string('openclose');
            $table->string('detail');
            $table->string('image');
            $table->string('line');
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
        Schema::dropIfExists('silom_places');
    }
}
