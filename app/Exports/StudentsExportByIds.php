<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class StudentsExportByIds implements
    FromQuery,
    WithHeadings,
    WithMapping
{
    public function __construct(
        protected array $ids
    ) {}

    public function query()
    {
        return Student::query()
            ->with('educationUnit')
            ->whereIn(
                'id',
                $this->ids
            )
            ->orderBy('name');
    }

    public function headings(): array
    {
        return [
            'No',
            'Nama Siswa',
            'NISN',
            'Unit Pendidikan',
            'Jenis Kelamin',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Angkatan',
            'Jurusan',
            'Kelas',
            'Status',
            'Tahun Masuk',
            'Tahun Lulus',
            'Keterangan',
        ];
    }

    public function map(
        $student
    ): array {

        static $number = 0;

        $number++;

        return [
            $number,
            $student->name,
            $student->nisn,
            $student
                ->educationUnit
                ?->name ?? '-',

            $student->gender ?? '-',

            $student
                ->birth_place ?? '-',

            $student->birth_date
                ?->format('d-m-Y')
                ?? '-',

            $student->batch ?? '-',

            $student->major ?? '-',

            $student->class ?? '-',

            $student->status ?? '-',

            $student->entry_year ?? '-',

            $student
                ->graduation_year ?? '-',

            $student
                ->description ?? '-',
        ];
    }
}