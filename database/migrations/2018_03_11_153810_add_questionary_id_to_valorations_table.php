<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddQuestionaryIdToValorationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('valorations', function (Blueprint $table) {
            $table->integer('questionary_id')->unsigned()->after('id');

            $table->foreign('questionary_id')->references('id')->on('questionaries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_questionary_id_to_valorations');
    }
}
