<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRuToPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {

            $table->text('meta_titleRU')->nullable()->after('meta_titleEN');
            $table->text('meta_descriptionRU')->nullable()->after('meta_descriptionEN');
            $table->text('meta_keywordsRU')->nullable()->after('meta_keywordsEN');

            $table->text('titleRU')->nullable()->after('titleEN');

            $table->text('textRU')->nullable()->after('textEN');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
            //
        });
    }
}
