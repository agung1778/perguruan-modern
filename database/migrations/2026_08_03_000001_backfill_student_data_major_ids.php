<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $records = DB::table('student_data')
            ->whereNull('major_id')
            ->whereNotNull('major')
            ->get();

        foreach ($records as $record) {
            $major = DB::table('majors')
                ->where('education_unit_id', $record->education_unit_id)
                ->whereRaw('LOWER(name) = LOWER(?)', [$record->major])
                ->first();

            if (! $major) {
                continue;
            }

            DB::table('student_data')
                ->where('id', $record->id)
                ->update([
                    'major_id' => $major->id,
                ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Tidak perlu rollback data, hanya migrasi backfill.
    }
};
