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
        Schema::table('options', function (Blueprint $table) {
            //
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('social_network')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('options', function (Blueprint $table) {
            //
            $table->dropColumn('value');
            $table->dropColumn('code');
            $table->dropColumn('title');
        });
    }
};
