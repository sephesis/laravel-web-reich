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
        Schema::table('articles', function (Blueprint $table) {
            $table->boolean('active')->default(true);
            $table->text('description');
            $table->string('img')->nullable();
            $table->dateTime('date_active_from')->nullable();
            $table->dateTime('date_active_to')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('active');
            $table->dropColumn('description');
            $table->dropColumn('img');
            $table->dropColumn('date_active_from');
            $table->dropColumn('date_active_to');
        });
    }
};
