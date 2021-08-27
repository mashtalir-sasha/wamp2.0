<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');

            $table->text('type');
            $table->text('typeEN')->nullable();

            $table->text('link')->nullable();

            $table->text('image');

            $table->text('title');
            $table->text('titleEN')->nullable();

            $table->text('sub_title')->nullable();
            $table->text('sub_titleEN')->nullable();

            $table->text('task')->nullable();
            $table->text('taskEN')->nullable();

            $table->text('solution')->nullable();
            $table->text('solutionEN')->nullable();

            $table->text('result_title1')->nullable();
            $table->text('result_title1EN')->nullable();
            $table->text('result_text1')->nullable();
            $table->text('result_text1EN')->nullable();

            $table->text('result_title2')->nullable();
            $table->text('result_title2EN')->nullable();
            $table->text('result_text2')->nullable();
            $table->text('result_text2EN')->nullable();

            $table->text('result_title3')->nullable();
            $table->text('result_title3EN')->nullable();
            $table->text('result_text3')->nullable();
            $table->text('result_text3EN')->nullable();

            $table->text('result_title4')->nullable();
            $table->text('result_title4EN')->nullable();
            $table->text('result_text4')->nullable();
            $table->text('result_text4EN')->nullable();

            $table->text('strategy1')->nullable();
            $table->text('strategy1EN')->nullable();
            $table->text('strategy2')->nullable();
            $table->text('strategy2EN')->nullable();
            $table->text('strategy3')->nullable();
            $table->text('strategy3EN')->nullable();
            $table->text('strategy4')->nullable();
            $table->text('strategy4EN')->nullable();
            $table->text('strategy5')->nullable();
            $table->text('strategy5EN')->nullable();
            $table->text('strategy6')->nullable();
            $table->text('strategy6EN')->nullable();
            $table->text('strategy7')->nullable();
            $table->text('strategy7EN')->nullable();
            $table->text('strategy8')->nullable();
            $table->text('strategy8EN')->nullable();
            $table->text('strategy9')->nullable();
            $table->text('strategy9EN')->nullable();
            $table->text('strategy10')->nullable();
            $table->text('strategy10EN')->nullable();

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
        Schema::dropIfExists('projects');
    }
}
