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
        Schema::create('soldiers', function (Blueprint $table) {
            $table->id();
            $table->string('nameSoldier',30);
            $table->string('LastNameSoldier',30);
            $table->string('degree',20);

            
            $table->unsignedBigInteger('quarterSoldier_id')->nullable();
            $table->foreign('quarterSoldier_id')
            ->references('id')
            ->on('quarters')
            ->onDelete('set null');

            $table->unsignedBigInteger('companySoldier_id')->nullable();
            $table->foreign('companySoldier_id')
            ->references('id')
            ->on('companies')
            ->onDelete('set null');

            $table->unsignedBigInteger('armyCorpSoldier_id')->nullable();
            $table->foreign('armyCorpSoldier_id')
            ->references('id')
            ->on('army_corps')
            ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soldiers');
    }
};
