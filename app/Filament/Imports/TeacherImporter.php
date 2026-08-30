<?php

namespace App\Filament\Imports;

use App\Models\EducationUnit;
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

            ImportColumn::make('education_unit')
                ->label('Unit Pendidikan')
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
                ->label('NIP / NIK'),

            ImportColumn::make('gender')
                ->label('Jenis Kelamin')
                ->rules([
                    'nullable',
                    'in:L,P',
                ]),

            ImportColumn::make('birth_place')
                ->label('Tempat Lahir'),

            ImportColumn::make('birth_date')
                ->label('Tanggal Lahir'),

            ImportColumn::make('position')
                ->label('Jabatan'),

            ImportColumn::make('employment_status')
                ->label('Status Kepegawaian'),

            ImportColumn::make('subject')
                ->label('Mata Pelajaran'),

            ImportColumn::make('description')
                ->label('Deskripsi'),

        ];
    }

    public function resolveRecord(): ?Teacher
    {
        return new Teacher;
    }

    protected function beforeSave(): void
    {
        $unitName = $this->data['education_unit'] ?? null;

        if (! $unitName) {
            return;
        }

        $unit = EducationUnit::query()
            ->where('name', $unitName)
            ->first();

        if ($unit) {
            $this->record->education_unit_id = $unit->id;
        }
    }

    public static function getCompletedNotificationBody(
        Import $import
    ): string {
        $body = 'Import data guru telah selesai. '.
            number_format($import->successful_rows).
            ' data berhasil diimpor.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' '.
                number_format($failedRowsCount).
                ' data gagal diimpor.';
        }

        return $body;
    }
}
