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
        Schema::create('contratos', function (Blueprint $table) {
            $table->id();
            $table->string('nombreProceso',250);
            $table->string('objetoProceso',250);
            $table->string('tipoProceso',40);
            $table->string('nroContrato',70);
            $table->string('ordenCompra',20);
            $table->integer('plazoEntrega');
            $table->date('fechaContrato',90);
            $table->date('fechaEntrega',90);
            $table->string('moneda',50);
            $table->decimal('montoTotal',10,2);
            $table->text('observacion',100)->nullable();
            $table->foreignId('cliente_id')->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contratos');
    }
};
