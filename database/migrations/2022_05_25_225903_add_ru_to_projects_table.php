<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRuToProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            
            $table->text('typeRU')->nullable()->after('typeEN');

            $table->text('titleRU')->nullable()->after('titleEN');

            $table->text('sub_titleRU')->nullable()->after('sub_titleEN');

            $table->text('taskRU')->nullable()->after('taskEN');

            $table->text('solutionRU')->nullable()->after('solutionEN');

            $table->text('result_title1RU')->nullable()->after('result_title1EN');

            $table->text('result_text1RU')->nullable()->after('result_text1EN');

            $table->text('result_title2RU')->nullable()->after('result_title2EN');

            $table->text('result_text2RU')->nullable()->after('result_text2EN');

            $table->text('result_title3RU')->nullable()->after('result_title3EN');

            $table->text('result_text3RU')->nullable()->after('result_text3EN');

            $table->text('result_title4RU')->nullable()->after('result_title4EN');

            $table->text('result_text4RU')->nullable()->after('result_text4EN');

            $table->text('strategy1RU')->nullable()->after('strategy1EN');

            $table->text('strategy2RU')->nullable()->after('strategy2EN');

            $table->text('strategy3RU')->nullable()->after('strategy3EN');

            $table->text('strategy4RU')->nullable()->after('strategy4EN');

            $table->text('strategy5RU')->nullable()->after('strategy5EN');

            $table->text('strategy6RU')->nullable()->after('strategy6EN');

            $table->text('strategy7RU')->nullable()->after('strategy7EN');

            $table->text('strategy8RU')->nullable()->after('strategy8EN');

            $table->text('strategy9RU')->nullable()->after('strategy9EN');

            $table->text('strategy10RU')->nullable()->after('strategy10EN');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            //
        });
    }
}
