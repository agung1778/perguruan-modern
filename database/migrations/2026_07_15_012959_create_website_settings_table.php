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
        Schema::create('website_settings', function (Blueprint $table) {

            $table->uuid('id')->primary();

            $table->string('school_name');

            $table->string('logo')->nullable();

            $table->string('favicon')->nullable();


            $table->text('about')->nullable();

            $table->text('history')->nullable();

            $table->text('vision')->nullable();

            $table->text('mission')->nullable();


            $table->text('address')->nullable();

            $table->string('phone')->nullable();

            $table->string('email')->nullable();


            $table->text('google_maps')->nullable();


            $table->string('facebook')->nullable();

            $table->string('instagram')->nullable();

            $table->string('youtube')->nullable();


            $table->text('meta_description')->nullable();


            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_settings');
    }
};
