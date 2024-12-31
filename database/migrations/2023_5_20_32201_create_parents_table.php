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
        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            $table->json('father_name');
            $table->json('father_work');
            $table->bigInteger('father_contact1');
            $table->bigInteger('father_contact2')->nullable();
            $table->json('mother_name');
            $table->json('mother_work')->nullable();
            $table->bigInteger('mother_contact1')->nullable();
            $table->bigInteger('mother_contact2')->nullable();
            $table->json('kin_name')->nullable();
            $table->json('kin_relationship')->nullable();
            $table->bigInteger('kin_contact')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parents');
    }
};
