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
        Schema::table('procesos', function (Blueprint $table) {
            $table->integer('pid')->after('catalogo_id')->nullable(false);
            $table->integer('prioridad')->after('pid')->nullable(false);
            $table->string('nombre_proceso')->after('prioridad')->nullable(false);
            $table->string('usuario')->after('nombre_proceso')->nullable(false);
            $table->string('descripcion_proceso')->after('usuario')->nullable()->default(null);
            $table->integer('tiempo_llegada')->after('descripcion_proceso')->nullable(false);
            $table->bigInteger('uso_memoria')->after('tiempo_llegada')->nullable(false);
            $table->double('uso_cpu', 8, 2)->after('uso_memoria')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('procesos', function (Blueprint $table) {
            //
        });
    }
};
