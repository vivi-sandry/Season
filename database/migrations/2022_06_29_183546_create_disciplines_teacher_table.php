<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplines_teacher', function (Blueprint $table) {
            //foreingId identifica a chave estrangeira.
            $table->foreignId('teacher_id')->constrained();
            $table->foreignId('discipline_id')->constrained();
            //unique serve para não ter diplicatas.
            $table->unique(['teacher_id', 'disciplines_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disciplines_teacher');
    }
};
