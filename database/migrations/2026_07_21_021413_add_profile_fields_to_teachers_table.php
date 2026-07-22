<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Tambahkan field tambahan untuk guru dan karyawan.
     */
    public function up(): void
    {
        Schema::table('teachers', function (Blueprint $table) {

            $table->string('nuptk')
                ->nullable()
                ->after('nip');

            $table->string('gender')
                ->nullable()
                ->after('nuptk');

            $table->string('birth_place')
                ->nullable()
                ->after('gender');

            $table->date('birth_date')
                ->nullable()
                ->after('birth_place');

            $table->string('subject')
                ->nullable()
                ->after('position');

            $table->string('employment_status')
                ->default('gty')
                ->after('subject');

            $table->year('join_year')
                ->nullable()
                ->after('employment_status');

            $table->boolean('is_active')
                ->default(true)
                ->after('join_year');

            $table->text('description')
                ->nullable()
                ->after('is_active');
        });
    }

    /**
     * Hapus field tambahan.
     */
    public function down(): void
    {
        Schema::table('teachers', function (Blueprint $table) {

            $table->dropColumn([
                'nuptk',
                'gender',
                'birth_place',
                'birth_date',
                'subject',
                'employment_status',
                'join_year',
                'is_active',
                'description',
            ]);

        });
    }
};