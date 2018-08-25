<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionnairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::dropIfExists('questionnaires');

        Schema::create('questionnaires', function (Blueprint $table) {
            $table->increments('questionnaire_id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('level_id');

            $table->string('question_name');
            $table->string('question_image'); //image
            $table->string('choices'); //image array of choices
            $table->string('choice1'); //image array of choices
            $table->string('choice2'); //image array of choices
            $table->string('choice3'); //image array of choices
            $table->string('choice4'); //image array of choices
            $table->string('choice5'); //image array of choices
            $table->time('standard_time'); //check sa array sa choices


        });

          Schema::table('questionnaires', function($table) {
          $table->foreign('level_id')->references('level_id')->on('levels')->onDelete('cascade');
         $table->foreign('category_id')->references('category_id')->on('categorys')->onDelete('cascade');
          //

       });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questionnaires');
    }
}
