<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ppdbs', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->foreignUuid('education_unit_id')
                ->constrained('education_units')
                ->cascadeOnDelete();

            $table->string('title');

            $table->string('academic_year');

            $table->text('description')
                ->nullable();

            $table->longText('requirements')
                ->nullable();

            $table->longText('schedule')
                ->nullable();

            $table->date('registration_start')
                ->nullable();

            $table->date('registration_end')
                ->nullable();

            $table->decimal('registration_fee', 15, 2)
                ->nullable();

            $table->string('registration_url')
                ->nullable();

            $table->text('contact')
                ->nullable();

            $table->enum('status', [
                'upcoming',
                'open',
                'closed',
            ])->default('upcoming');

            $table->boolean('is_published')
                ->default(false);

            $table->timestamps();

            $table->softDeletes();

            $table->index([
                'education_unit_id',
                'academic_year',
            ]);

            $table->index('status');

            $table->index('is_published');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ppdbs');
    }
};