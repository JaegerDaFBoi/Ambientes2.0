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
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fk_instructor')->constrained('instructors');
            $table->foreignId('fk_ambiente')->constrained('environments');
            $table->foreignId('fk_ficha')->constrained('cards');
            $table->foreignId('fk_competencia')->constrained('competences');
            $table->date('fecha');
            $table->time('horainicio');
            $table->time('horafin');
            $table->mediumText('tipoasignacion');
            $table->longText('descripcion');
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
        Schema::dropIfExists('assignments');
    }
};
