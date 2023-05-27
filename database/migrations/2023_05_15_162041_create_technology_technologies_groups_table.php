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
        Schema::create('technology_technologies_groups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('technology_id')->index()->nullable()->constrained('technologies')->cascadeOnDelete();
            $table->foreignId('group_id')->index()->nullable()->constrained('technologies_groups')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technology_technologies_groups');
    }
};
