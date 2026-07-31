<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('student_data', function (Blueprint $table) {
            $table->foreignUuid('major_id')
                ->nullable()
                ->after('education_unit_id')
                ->constrained('majors')
                ->nullOnDelete();

            $table->index([
                'education_unit_id',
                'academic_year',
            ]);

            $table->unique([
                'education_unit_id',
                'major_id',
                'academic_year',
            ], 'student_data_unit_major_year_unique');
        });
    }

    public function down(): void
    {
        Schema::table('student_data', function (Blueprint $table) {
            $table->dropUnique(
                'student_data_unit_major_year_unique'
            );

            $table->dropForeign([
                'major_id',
            ]);

            $table->dropIndex([
                'education_unit_id',
                'academic_year',
            ]);

            $table->dropColumn('major_id');
        });
    }
};