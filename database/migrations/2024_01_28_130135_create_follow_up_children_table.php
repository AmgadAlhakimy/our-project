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
        Schema::create('follow_up_children', function (Blueprint $table) {
            $table->id();
            $table->json('homework');
            $table->json('bath');
            $table->json('snack');
            $table->json('food');
            $table->string('note')->nullable();
            $table->foreignId('student_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('classroom_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('follow_up_children');
    }
};
