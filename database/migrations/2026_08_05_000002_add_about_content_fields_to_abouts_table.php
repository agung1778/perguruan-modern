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
        Schema::table('abouts', function (Blueprint $table) {
            if (! Schema::hasColumn('abouts', 'description')) {
                $table->longText('description')->nullable()->after('title');
            }

            if (! Schema::hasColumn('abouts', 'history')) {
                $table->longText('history')->nullable()->after('description');
            }

            if (! Schema::hasColumn('abouts', 'vision')) {
                $table->longText('vision')->nullable()->after('history');
            }

            if (! Schema::hasColumn('abouts', 'mission')) {
                $table->longText('mission')->nullable()->after('vision');
            }

            if (! Schema::hasColumn('abouts', 'established')) {
                $table->string('established')->nullable()->after('image');
            }

            if (Schema::hasColumn('abouts', 'slug')) {
                $table->string('slug')->nullable()->change();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('abouts', function (Blueprint $table) {
            if (Schema::hasColumn('abouts', 'description')) {
                $table->dropColumn('description');
            }

            if (Schema::hasColumn('abouts', 'history')) {
                $table->dropColumn('history');
            }

            if (Schema::hasColumn('abouts', 'vision')) {
                $table->dropColumn('vision');
            }

            if (Schema::hasColumn('abouts', 'mission')) {
                $table->dropColumn('mission');
            }

            if (Schema::hasColumn('abouts', 'established')) {
                $table->dropColumn('established');
            }
        });
    }
};
