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
        Schema::table('projects', function (Blueprint $table) {
            //
            $table->string('img')->nullable();
            $table->boolean('property_column_size_4')->nullable()->default(false);
            $table->boolean('property_column_size_8')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('img');
            $table->dropColumn('property_column_size_4');
            $table->dropColumn('property_column_size_8');
        });
    }
};
