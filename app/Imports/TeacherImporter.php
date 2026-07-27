<?php

namespace App\Filament\Imports;

use App\Models\Teacher;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;

class TeacherImporter extends Importer
{
    protected static ?string $model = Teacher::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('education_unit_id')
                ->label('ID Unit Pendidikan')
                ->requiredMapping()
                ->rules([
                    'required',
                ]),

            ImportColumn::make('name')
                ->label('Nama Guru')
                ->requiredMapping()
                ->rules([
                    'required',
                    'max:255',
                ]),

            ImportColumn::make('nip')
                ->label('NIP')
                ->rules([
                    'nullable',
                    'max:255',
                ]),

            ImportColumn::make('nuptk')
                ->label('NUPTK')
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

            ImportColumn::make('position')
                ->label('Jabatan')
                ->rules([
                    'nullable',
                    'max:255',
                ]),

            ImportColumn::make('status')
                ->label('Status Kepegawaian')
                ->rules([
                    'nullable',
                    'max:255',
                ]),

            ImportColumn::make('education')
                ->label('Pendidikan Terakhir')
                ->rules([
                    'nullable',
                    'max:255',
                ]),

            ImportColumn::make('major')
                ->label('Bidang Studi')
                ->rules([
                    'nullable',
                    'max:255',
                ]),

            ImportColumn::make('description')
                ->label('Keterangan')
                ->rules([
                    'nullable',
                ]),
        ];
    }

    public function resolveRecord(): ?Teacher
    {
        return new Teacher();
    }

    public static function getCompletedNotificationBody(
        Import $import
    ): string {
        $body = 'Import data guru telah selesai. '
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