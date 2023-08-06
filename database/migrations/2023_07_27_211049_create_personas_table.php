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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('paterno',50);
            $table->string('materno',50);
            $table->string('nombre',50);
            $table->char('dni',50);
            $table->char('sexo',1);
            $table->char('celular',9)->nullable();
            $table->string('email',100)->nullable();
            $table->string('observacion',100)->nullable();
            $table->date('fechaNac')->nullable();
            $table->smallInteger('tallajeOk')->nullable();
            $table->foreignId('area_id')->constrained();
            $table->foreignId('cargo_id')->constrained();
            $table->foreignId('cliente_id')->constrained();
            $table->foreignId('contrato_id')->constrained();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
