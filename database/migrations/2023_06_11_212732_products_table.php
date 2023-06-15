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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_prod');
            $table->string('descripcion');
            $table->double('precio');
            $table->string('img1_prod');
            $table->string('img2_prod');
            $table->string('img3_prod');
            $table->string('estado');
            $table->integer('talla');
            $table->string('color');
            $table->string('marca');
            $table->integer('cantidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
