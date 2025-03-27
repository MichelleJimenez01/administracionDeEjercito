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
        Schema::create('quarter_companies', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('quarter_id')->unique();
            $table->foreign('quarter_id')
            ->references('id')
            ->on('quarters')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('company_id')->unique();
            $table->foreign('company_id')
            ->references('id')
            ->on('companies')
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
        Schema::dropIfExists('quarter_companies');
    }
};
