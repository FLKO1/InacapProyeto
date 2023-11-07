<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->date('dia');
            $table->time('hora');
            $table->unsignedBigInteger('doctors_id'); 
            $table->unsignedBigInteger('especialidad_id');   
            $table->unsignedBigInteger('estado_id'); 
            $table->unsignedBigInteger('paciente_id'); 
            $table->timestamps();

            $table->foreign('doctors_id')->references('id')->on('doctors');
            $table->foreign('especialidad_id')->references('id')->on('especialidad');
            $table->foreign('estado_id')->references('id')->on('estado');
            $table->foreign('paciente_id')->references('id')->on('paciente');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
