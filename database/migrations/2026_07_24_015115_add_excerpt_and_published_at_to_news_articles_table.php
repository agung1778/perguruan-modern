<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('news_articles', function (Blueprint $table) {
            if (! Schema::hasColumn('news_articles', 'excerpt')) {
                $table->text('excerpt')
                    ->nullable()
                    ->after('slug');
            }

            if (! Schema::hasColumn('news_articles', 'published_at')) {
                $table->timestamp('published_at')
                    ->nullable()
                    ->after('status');
            }
        });
    }

    public function down(): void
    {
        Schema::table('news_articles', function (Blueprint $table) {
            if (Schema::hasColumn('news_articles', 'excerpt')) {
                $table->dropColumn('excerpt');
            }

            if (Schema::hasColumn('news_articles', 'published_at')) {
                $table->dropColumn('published_at');
            }
        });
    }
};