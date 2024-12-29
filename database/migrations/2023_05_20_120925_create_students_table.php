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
            $table->json('takes_medicine')->nullable();
            $table->json('medicine_desc')->nullable();
            $table->json('has_allergy')->nullable();
            $table->json('allergy_desc')->nullable();
            $table->json('has_health_problem')->nullable();
            $table->json('health_problem_desc')->nullable();
            $table->string('note')->nullable();
            $table->foreignId('classroom_id')
                ->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('parents_id');
//                ->constrained()
//                ->cascadeOnUpdate()->cascadeOnDelete();
//                ->constrained('parents');
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
