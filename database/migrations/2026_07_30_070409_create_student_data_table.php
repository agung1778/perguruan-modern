<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('student_data', function (Blueprint $table) {
            $table->id();

            $table->uuid('education_unit_id')
                ->nullable();

            $table->string('class')->nullable();

            $table->string('major')->nullable();

            $table->unsignedInteger('male_count')->default(0);

            $table->unsignedInteger('female_count')->default(0);

            $table->unsignedInteger('total_count')->default(0);

            $table->unsignedInteger('scholarship_tahfiz')->default(0);

            $table->unsignedInteger('scholarship_akademik')->default(0);

            $table->unsignedInteger('scholarship_non_akademik')->default(0);

            $table->unsignedInteger('scholarship_yatim')->default(0);

            $table->unsignedInteger('scholarship_yayasan')->default(0);

            $table->unsignedSmallInteger('year')
                ->default(date('Y'));

            $table->timestamps();

            $table->foreign('education_unit_id')
                ->references('id')
                ->on('education_units')
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('student_data');
    }
};