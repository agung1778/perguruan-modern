<?php

namespace App\Imports;

use App\Models\EducationUnit;
use App\Models\Student;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentsImport implements
    ToCollection,
    WithHeadingRow
{
    public function collection(
        Collection $rows
    ): void {

        foreach ($rows as $row) {

            if (
                blank($row['nama']) ||
                blank($row['unit_pendidikan'])
            ) {
                continue;
            }

            $educationUnit =
                EducationUnit::query()
                    ->where(
                        'name',
                        trim(
                            $row['unit_pendidikan']
                        )
                    )
                    ->first();

            if (
                ! $educationUnit
            ) {
                continue;
            }

            Student::create([

                'education_unit_id' =>
                    $educationUnit->id,

                'name' =>
                    trim(
                        $row['nama']
                    ),

                'nisn' =>
                    $row['nisn']
                    ?? null,

                'gender' =>
                    $row['jenis_kelamin']
                    ?? null,

                'birth_place' =>
                    $row['tempat_lahir']
                    ?? null,

                'birth_date' =>
                    $row['tanggal_lahir']
                    ?? null,

                'batch' =>
                    $row['angkatan']
                    ?? null,

                'major' =>
                    $row['jurusan']
                    ?? null,

                'class' =>
                    $row['kelas']
                    ?? null,

                'status' =>
                    $row['status']
                    ?? 'active',

                'entry_year' =>
                    $row['tahun_masuk']
                    ?? null,

                'graduation_year' =>
                    $row['tahun_lulus']
                    ?? null,

                'description' =>
                    $row['keterangan']
                    ?? null,

            ]);
        }
    }
}