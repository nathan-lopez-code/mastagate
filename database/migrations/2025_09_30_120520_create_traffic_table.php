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
        Schema::create('traffic', function (Blueprint $table) {
            $table->id();
            $table->string('source')->default('site');
            $table->integer('visits')->default(0);
            $table->date('date');
            $table->timestamps();

            $table->unique(['source', 'date']); // éviter doublons
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('traffic');
    }
};
