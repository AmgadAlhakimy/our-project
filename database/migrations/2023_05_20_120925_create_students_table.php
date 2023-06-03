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
            $table->json('address1');
            $table->json('address2')->nullable();
            $table->json('sex');
            $table->date('birthdate');
            $table->json('place_of_birth');
            $table->json('take_medicine')->default(__('student.no'));
            $table->json('medicine_desc')->nullable();
            $table->json('have_allergy')->default(__('student.no'));
            $table->json('allergy_desc')->nullable();
            $table->json('have_health_problem')->default(__('student.no'));
            $table->json('health_problem_desc')->nullable();
            $table->string('note')->nullable();
            $table->foreignId('classs_id')->constrained('classses')->cascadeOnUpdate()->cascadeOnDelete();
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
