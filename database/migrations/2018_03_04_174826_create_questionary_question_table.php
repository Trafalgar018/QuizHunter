<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionaryQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionary_question', function (Blueprint $table) {
            $table->integer('questionary_id')->unsigned();
            $table->integer('question_id')->unsigned();

            $table->primary(['questionary_id','question_id']);

            $table->foreign('questionary_id')->references('id')->on('questionaries')->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questionary_question');
    }
}
