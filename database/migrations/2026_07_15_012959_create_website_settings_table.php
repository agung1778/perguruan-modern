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
        Schema::create('website_settings',function(Blueprint $table){
            $table->uuid('id')->primary();
            $table->string('school_name');
            $table->string('logo')
                ->nullable();
            $table->string('phone')
                ->nullable();
            $table->string('email')
                ->nullable();
            $table->text('address')
                ->nullable();
            $table->text('social_media')
                ->nullable();
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
