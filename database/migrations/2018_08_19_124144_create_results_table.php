<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::dropIfExists('results');

      Schema::create('results', function (Blueprint $table) {
        $table->increments('result_id');
        $table->float('score', 8, 2);
        $table->time('time_start');
        $table->time('time_end');
        $table->float('speed', 8, 2);
        $table->float('accuracy', 8, 2);
        $table->unsignedInteger('user_id');

        $table->unsignedInteger('questionnaire_id');
      });


      Schema::table('results', function($table) {
          $table->foreign('questionnaire_id')->references('questionnaire_id')->on('questionnaires')->onDelete('cascade');
          $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');

     });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results');
    }
}
