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
        Schema::create('service_soldiers', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('service_id')->unique();
            $table->foreign('service_id')
            ->references('id')
            ->on('services')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('soldier_id')->unique();
            $table->foreign('soldier_id')
            ->references('id')
            ->on('soldiers')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_soldiers');
    }
};
