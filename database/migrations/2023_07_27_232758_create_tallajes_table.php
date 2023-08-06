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
        Schema::create('tallajes', function (Blueprint $table) {
            $table->id();
            $table->string('tallaSaco',15)->nullable();
            $table->string('tallaCamisa',15)->nullable();
            $table->string('tallaPantalon',15)->nullable();
            $table->string('tallaFalda',15)->nullable();
            $table->string('tallaCasco',15)->nullable();
            $table->string('tallaCalzado',15)->nullable();
            $table->decimal('hombro',5,2)->nullable()->default(0);
            $table->decimal('cuello',5,2)->nullable()->default(0);
            $table->decimal('espalda',5,2)->nullable()->default(0);
            $table->decimal('pecho',5,2)->nullable()->default(0);
            $table->decimal('cintura',5,2)->nullable()->default(0);
            $table->decimal('abdomen',5,2)->nullable()->default(0);
            $table->decimal('cadera',5,2)->nullable()->default(0);
            $table->decimal('largoManga',5,2)->nullable()->default(0);
            $table->decimal('puno',5,2)->nullable()->default(0);
            $table->decimal('talleEspalda',5,2)->nullable()->default(0);
            $table->decimal('tallePecho',5,2)->nullable()->default(0);
            $table->decimal('largoSaco',5,2)->nullable()->default(0);
            $table->decimal('tiro',5,2)->nullable()->default(0);
            $table->decimal('largoPantalon',5,2)->nullable()->default(0);
            $table->decimal('rodilla',5,2)->nullable()->default(0);
            $table->decimal('basta',5,2)->nullable()->default(0);
            $table->string('observacion',150)->nullable();
            $table->foreignId('persona_id')->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tallajes');
    }
};
