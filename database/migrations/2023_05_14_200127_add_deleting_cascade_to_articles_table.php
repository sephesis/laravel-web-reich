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
        Schema::table('article_tags', function (Blueprint $table) {
            $table->foreignId('tag_id')->index()->nullable()->constrained('tags')->cascadeOnDelete();
            $table->foreignId('article_id')->index()->nullable()->constrained('articles')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('article_tags', function (Blueprint $table) {
        });
    }
};
