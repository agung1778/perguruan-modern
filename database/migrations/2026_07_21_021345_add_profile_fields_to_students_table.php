<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Tambahkan field tambahan untuk data siswa.
     */
    public function up(): void
    {
        Schema::table('students', function (Blueprint $table) {

            $table->string('photo')
                ->nullable()
                ->after('name');

            $table->string('gender')
                ->nullable()
                ->after('nisn');

            $table->string('birth_place')
                ->nullable()
                ->after('gender');

            $table->date('birth_date')
                ->nullable()
                ->after('birth_place');

            $table->string('batch')
                ->nullable()
                ->after('birth_date');

            $table->string('major')
                ->nullable()
                ->after('batch');

            $table->string('status')
                ->default('active')
                ->after('class');

            $table->year('entry_year')
                ->nullable()
                ->after('status');

            $table->year('graduation_year')
                ->nullable()
                ->after('entry_year');

            $table->text('description')
                ->nullable()
                ->after('graduation_year');
        });
    }

    /**
     * Hapus field tambahan.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {

            $table->dropColumn([
                'photo',
                'gender',
                'birth_place',
                'birth_date',
                'batch',
                'major',
                'status',
                'entry_year',
                'graduation_year',
                'description',
            ]);

        });
    }
};