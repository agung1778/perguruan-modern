<?php

namespace App\Filament\Imports;

use App\Models\Student;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;

class StudentImporter extends Importer
{
    protected static ?string $model =
        Student::class;

    public static function getColumns(): array
    {
        return [

            ImportColumn::make(
                'education_unit_id'
            )
                ->label(
                    'ID Unit Pendidikan'
                )
                ->requiredMapping()
                ->rules([
                    'required',
                    'exists:education_units,id',
                ]),

            ImportColumn::make('name')
                ->label('Nama Lengkap')
                ->requiredMapping()
                ->rules([
                    'required',
                    'max:255',
                ]),

            ImportColumn::make('nisn')
                ->label('NISN'),

            ImportColumn::make('gender')
                ->label('Jenis Kelamin'),

            ImportColumn::make('birth_place')
                ->label('Tempat Lahir'),

            ImportColumn::make('birth_date')
                ->label('Tanggal Lahir')
                ->rules([
                    'nullable',
                    'date',
                ]),

            ImportColumn::make('batch')
                ->label('Angkatan'),

            ImportColumn::make('major')
                ->label('Jurusan'),

            ImportColumn::make('class')
                ->label('Kelas'),

            ImportColumn::make('status')
                ->label('Status'),

            ImportColumn::make('entry_year')
                ->label('Tahun Masuk')
                ->rules([
                    'nullable',
                    'integer',
                ]),

            ImportColumn::make(
                'graduation_year'
            )
                ->label('Tahun Lulus')
                ->rules([
                    'nullable',
                    'integer',
                ]),

            ImportColumn::make(
                'description'
            )
                ->label('Keterangan'),

        ];
    }

    public function resolveRecord(): ?Student
    {
        return new Student();
    }

    public static function getCompletedNotificationBody(
        Import $import
    ): string {
        $body =
            'Import data siswa selesai. '
            .number_format(
                $import->successful_rows
            )
            .' data berhasil diimpor.';

        if (
            $failedRowsCount =
                $import->getFailedRowsCount()
        ) {
            $body .= ' '
                .number_format(
                    $failedRowsCount
                )
                .' data gagal diimpor.';
        }

        return $body;
    }
}