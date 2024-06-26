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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title',100);
            $table->text('description')->nullable();
            $table->string('price',20);
            $table->string('series',100);
            $table->date('sale_date')->nullable();
            $table->string('type',100);
            $table->text('img')->nullable();
            $table->json('artists')->nullable(); // Utilizza il tipo JSON invece di array
            $table->json('writers')->nullable();
            $table->string('slug',120);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
