<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('majors', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->foreignUuid('education_unit_id')
                ->constrained('education_units')
                ->cascadeOnDelete();

            $table->string('name');
            $table->string('short_name')->nullable();

            $table->text('description')->nullable();

            $table->boolean('is_active')
                ->default(true);

            $table->unsignedInteger('sort_order')
                ->default(0);

            $table->timestamps();

            $table->index([
                'education_unit_id',
                'is_active',
            ]);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('majors');
    }
};