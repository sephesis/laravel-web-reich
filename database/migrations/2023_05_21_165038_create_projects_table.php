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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->boolean('active')->nullable();
            $table->string('year')->nullable();
            $table->date('p_date')->nullable();
            $table->unsignedBigInteger('solution_id')->nullable();
            $table->index('solution_id', 'project_solution_idx');
            $table->foreign('solution_id', 'project_solution_fk')->on('solutions')->references('id');
            $table->string('url');
            $table->string('color');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
