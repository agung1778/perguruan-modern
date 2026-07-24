<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentsTemplateExport implements
    FromArray,
    WithHeadings
{
    public function headings(): array
    {
        return [
            'nama',
            'nisn',
            'unit_pendidikan',
            'jenis_kelamin',
            'tempat_lahir',
            'tanggal_lahir',
            'angkatan',
            'jurusan',
            'kelas',
            'status',
            'tahun_masuk',
            'tahun_lulus',
            'keterangan',
        ];
    }

    public function array(): array
    {
        return [
            [
                'Budi Santoso',
                '1234567890',
                'SD Amaliah',
                'L',
                'Bogor',
                '2015-01-20',
                '2025',
                null,
                '5A',
                'active',
                '2021',
                null,
                null,
            ],
        ];
    }
}