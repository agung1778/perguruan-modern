<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('testimonials', function (Blueprint $table) {

            if (! Schema::hasColumn('testimonials', 'position')) {
                $table->string('position')
                    ->nullable()
                    ->after('name');
            }

            if (! Schema::hasColumn('testimonials', 'is_active')) {
                $table->boolean('is_active')
                    ->default(true)
                    ->after('content');
            }

            if (! Schema::hasColumn('testimonials', 'deleted_at')) {
                $table->softDeletes();
            }
        });
    }

    public function down(): void
    {
        Schema::table('testimonials', function (Blueprint $table) {

            if (Schema::hasColumn('testimonials', 'position')) {
                $table->dropColumn('position');
            }

            if (Schema::hasColumn('testimonials', 'is_active')) {
                $table->dropColumn('is_active');
            }

            if (Schema::hasColumn('testimonials', 'deleted_at')) {
                $table->dropSoftDeletes();
            }
        });
    }
};