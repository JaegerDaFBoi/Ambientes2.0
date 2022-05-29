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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->integer('numero');
            $table->foreignId('fk_programa')->constrained('programs');
            $table->mediumText('jornada');
            $table->mediumText('modalidad');
            $table->date('fechainicio');
            $table->date('fechafin');
            $table->foreignId('fk_instructor')->constrained('instructors');
            $table->integer('cantidad');
            $table->boolean('isEliminated')->default(false);
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
        Schema::dropIfExists('cards');
    }
};
