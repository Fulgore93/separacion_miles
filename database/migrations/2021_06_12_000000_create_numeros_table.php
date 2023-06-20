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
        Schema::create('numeros', function (Blueprint $table) {
            $table->id();
            $table->string('numero_string1')->nullable();
            $table->string('numero_string2')->nullable();
            $table->float('numero_float1')->nullable();
            $table->float('numero_float2')->nullable();
            $table->integer('numero_int1')->nullable();
            $table->integer('numero_int2')->nullable();
            $table->double('numero_double1')->nullable();
            $table->double('numero_double2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('numeros');
    }
};
