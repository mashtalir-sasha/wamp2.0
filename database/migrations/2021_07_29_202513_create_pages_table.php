<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');

            $table->text('meta_title');
            $table->text('meta_titleEN')->nullable();
            $table->text('meta_description');
            $table->text('meta_descriptionEN')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_keywordsEN')->nullable();

            $table->text('slug');

            $table->text('image');
            $table->text('title');
            $table->text('titleEN')->nullable();
            $table->text('text');
            $table->text('textEN')->nullable();

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
        Schema::dropIfExists('pages');
    }
}
