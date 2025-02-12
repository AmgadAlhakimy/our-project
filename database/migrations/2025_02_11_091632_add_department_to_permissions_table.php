<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('permissions', function (Blueprint $table) {
            $table->string('name_ar')->nullable()->after('name');
            $table->string('department')->nullable()->after('name_ar');
            $table->string('department_ar')->nullable()->after('department');
        });
    }

    public function down(): void
    {
        Schema::table('permissions', function (Blueprint $table) {
            $table->dropColumn('name_ar');
            $table->dropColumn('department');
            $table->dropColumn('department_ar');
        });
    }
};
