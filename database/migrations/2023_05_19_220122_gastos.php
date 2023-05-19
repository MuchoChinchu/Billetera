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
        Schema::create('gastos', function (Blueprint $table) {
            $table->id();
            $table->string("descripcion");
            $table->float("monto");
            $table->date("fecha");
            $table->string("establecimiento");
            $table->boolean("efectivo");
            $table->foreignId("categorias_id") ->references("id")->on("categoria-gastos");
            $table->foreignId("user_id")->references("id")->on("users");
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropDatabaseIfExists("gastos");

    }
};
