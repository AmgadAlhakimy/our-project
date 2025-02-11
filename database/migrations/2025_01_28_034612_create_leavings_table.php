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
        Schema::create('leavings', function (Blueprint $table) {
            $table->id();
            $table->boolean('leaving');
            $table->timestamps();
            $table->foreignId('student_id')
                ->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('classroom_id')
                ->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leavings');
    }
};
