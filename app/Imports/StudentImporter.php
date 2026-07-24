<?php

namespace App\Filament\Imports;

use App\Models\Student;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;

class StudentImporter extends Importer
{
    protected static ?string $model = Student::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('name')
                ->label('Nama Siswa')
                ->requiredMapping()
                ->rules([
                    'required',
                    'max:255',
                ]),

            ImportColumn::make('education_unit_id')
                ->label('ID Unit Pendidikan')
                ->requiredMapping()
                ->rules([
                    'required',
                ]),

            ImportColumn::make('nisn')
                ->label('NISN')
                ->rules([
                    'nullable',
                    'max:255',
                ]),

            ImportColumn::make('gender')
                ->label('Jenis Kelamin')
                ->rules([
                    'nullable',
                    'max:255',
                ]),

            ImportColumn::make('birth_place')
                ->label('Tempat Lahir')
                ->rules([
                    'nullable',
                    'max:255',
                ]),

            ImportColumn::make('birth_date')
                ->label('Tanggal Lahir')
                ->rules([
                    'nullable',
                    'date',
                ]),

            ImportColumn::make('batch')
                ->label('Angkatan')
                ->rules([
                    'nullable',
                    'max:255',
                ]),

            ImportColumn::make('major')
                ->label('Jurusan')
                ->rules([
                    'nullable',
                    'max:255',
                ]),

            ImportColumn::make('class')
                ->label('Kelas')
                ->rules([
                    'nullable',
                    'max:255',
                ]),

            ImportColumn::make('status')
                ->label('Status')
                ->rules([
                    'nullable',
                    'max:255',
                ]),

            ImportColumn::make('entry_year')
                ->label('Tahun Masuk')
                ->rules([
                    'nullable',
                    'integer',
                ]),

            ImportColumn::make('graduation_year')
                ->label('Tahun Lulus')
                ->rules([
                    'nullable',
                    'integer',
                ]),

            ImportColumn::make('description')
                ->label('Keterangan')
                ->rules([
                    'nullable',
                ]),
        ];
    }

    public function resolveRecord(): ?Student
    {
        return new Student();
    }

    public static function getCompletedNotificationBody(
        Import $import
    ): string {
        $body = 'Import data siswa telah selesai. '
            .number_format($import->successful_rows)
            .' data berhasil diimpor.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' '
                .number_format($failedRowsCount)
                .' data gagal diimpor.';
        }

        return $body;
    }
}