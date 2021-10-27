<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('respuesta1')->nullable()->default('text');
            $table->string('respuesta2')->nullable()->default('text');
            $table->string('respuesta3')->nullable()->default('text');
            $table->string('respuesta4')->nullable()->default('text');
            $table->string('respuesta5')->nullable()->default('text');
            $table->string('respuesta6')->nullable()->default('text');
            $table->string('respuesta7')->nullable()->default('text');
            $table->string('respuesta8')->nullable()->default('text');
            $table->string('respuesta9')->nullable()->default('text');
            $table->string('respuesta10')->nullable()->default('text');
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
        Schema::dropIfExists('questions');
    }
}
