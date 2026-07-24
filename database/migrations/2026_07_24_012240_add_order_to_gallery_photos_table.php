<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('gallery_photos', function (Blueprint $table) {

            if (! Schema::hasColumn('gallery_photos', 'caption')) {
                $table->text('caption')
                    ->nullable();
            }

            if (! Schema::hasColumn('gallery_photos', 'order')) {
                $table->unsignedInteger('order')
                    ->default(0);
            }

        });
    }

    public function down(): void
    {
        Schema::table('gallery_photos', function (Blueprint $table) {

            if (Schema::hasColumn('gallery_photos', 'order')) {
                $table->dropColumn('order');
            }

            if (Schema::hasColumn('gallery_photos', 'caption')) {
                $table->dropColumn('caption');
            }

        });
    }
};