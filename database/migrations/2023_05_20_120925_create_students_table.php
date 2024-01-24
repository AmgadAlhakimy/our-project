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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->json('name');
            $table->string('photo')->nullable();
            $table->json('address');
            $table->json('gender');
            $table->date('birthdate');
            $table->json('place_of_birth');
            $table->json('medicine_desc')->nullable();
            $table->json('allergy_desc')->nullable();
            $table->json('health_problem_desc')->nullable();
            $table->string('note')->nullable();
            $table->foreignId('class_id')->constrained('classses')->cascadeOnUpdate()->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
