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
        Schema::create('relatives', function (Blueprint $table) {
            $table->id();
            $table->json('father_name');
            $table->json('father_work');
            $table->bigInteger('father_contact1');
            $table->bigInteger('father_contact2');
            $table->json('mother_name');
            $table->json('mother_work');
            $table->bigInteger('mother_contact1');
            $table->bigInteger('mother_contact2');
            $table->json('kin_name');
            $table->json('kin_relationship');
            $table->bigInteger('kin_contact');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relatives');
    }
};
