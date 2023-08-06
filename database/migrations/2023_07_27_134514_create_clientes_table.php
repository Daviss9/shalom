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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('cliente',100);
            $table->char('ruc',11);
            $table->string('direccion',100)->nullable();
            $table->string('email',100)->nullable();
            $table->string('personaContacto',60)->nullable();
            $table->string('cargoContacto',60)->nullable();
            $table->string('telefonoContacto',60)->nullable();
            $table->string('emailContacto',60)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
