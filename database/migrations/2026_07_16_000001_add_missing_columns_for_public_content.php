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
        if (! Schema::hasColumn('education_units', 'is_active')) {
            Schema::table('education_units', function (Blueprint $table) {
                $table->boolean('is_active')->default(true)->after('website');
            });
        }

        if (! Schema::hasColumn('agendas', 'slug')) {
            Schema::table('agendas', function (Blueprint $table) {
                $table->string('slug')->nullable()->after('title');
            });
        }

        if (! Schema::hasColumn('agendas', 'location')) {
            Schema::table('agendas', function (Blueprint $table) {
                $table->string('location')->nullable()->after('date');
            });
        }

        if (! Schema::hasColumn('agendas', 'is_active')) {
            Schema::table('agendas', function (Blueprint $table) {
                $table->boolean('is_active')->default(true)->after('location');
            });
        }

        if (! Schema::hasColumn('gallery_albums', 'is_active')) {
            Schema::table('gallery_albums', function (Blueprint $table) {
                $table->boolean('is_active')->default(true)->after('description');
            });
        }

        if (! Schema::hasColumn('testimonials', 'is_active')) {
            Schema::table('testimonials', function (Blueprint $table) {
                $table->boolean('is_active')->default(true)->after('message');
            });
        }

        if (! Schema::hasColumn('news_articles', 'slug')) {
            Schema::table('news_articles', function (Blueprint $table) {
                $table->string('slug')->nullable()->after('title');
            });
        }

        if (! Schema::hasColumn('news_articles', 'status')) {
            Schema::table('news_articles', function (Blueprint $table) {
                $table->string('status')->default('draft')->after('slug');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('education_units', 'is_active')) {
            Schema::table('education_units', function (Blueprint $table) {
                $table->dropColumn('is_active');
            });
        }

        if (Schema::hasColumn('agendas', 'slug')) {
            Schema::table('agendas', function (Blueprint $table) {
                $table->dropColumn('slug');
            });
        }

        if (Schema::hasColumn('agendas', 'location')) {
            Schema::table('agendas', function (Blueprint $table) {
                $table->dropColumn('location');
            });
        }

        if (Schema::hasColumn('agendas', 'is_active')) {
            Schema::table('agendas', function (Blueprint $table) {
                $table->dropColumn('is_active');
            });
        }

        if (Schema::hasColumn('gallery_albums', 'is_active')) {
            Schema::table('gallery_albums', function (Blueprint $table) {
                $table->dropColumn('is_active');
            });
        }

        if (Schema::hasColumn('testimonials', 'is_active')) {
            Schema::table('testimonials', function (Blueprint $table) {
                $table->dropColumn('is_active');
            });
        }

        if (Schema::hasColumn('news_articles', 'slug')) {
            Schema::table('news_articles', function (Blueprint $table) {
                $table->dropColumn('slug');
            });
        }

        if (Schema::hasColumn('news_articles', 'status')) {
            Schema::table('news_articles', function (Blueprint $table) {
                $table->dropColumn('status');
            });
        }
    }
};
