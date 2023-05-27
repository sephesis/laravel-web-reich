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
        Schema::table('technologies', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('technology_group_id')->nullable();
            $table->index('technology_group_id', 'technology_group_technology_idx');

            $table->foreign('technology_group_id', 'technology_group_technology_fk')->on('technologies_groups')->references('id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('technologies', function (Blueprint $table) {
            //
        });
    }
};
