<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maps', function (Blueprint $table) {
            $table->increments('id');

            $table->text('place');
            $table->text('placeEN')->nullable();

            $table->text('title');
            $table->text('titleEN')->nullable();

            $table->text('text');
            $table->text('textEN')->nullable();

            $table->text('position_top');
            $table->text('position_left')->nullable();
            $table->text('position_right')->nullable();

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
        Schema::dropIfExists('maps');
    }
}
