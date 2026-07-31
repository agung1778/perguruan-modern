<?php

namespace App\Filament\Exports;

use App\Models\Student;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class StudentExporter extends Exporter
{
    protected static ?string $model = Student::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('educationUnit.name')
                ->label('Unit Pendidikan'),

            ExportColumn::make('name')
                ->label('Nama Siswa'),

            ExportColumn::make('nisn')
                ->label('NISN'),

            ExportColumn::make('gender')
                ->label('Jenis Kelamin'),

            ExportColumn::make('birth_place')
                ->label('Tempat Lahir'),

            ExportColumn::make('birth_date')
                ->label('Tanggal Lahir'),

            ExportColumn::make('batch')
                ->label('Angkatan'),

            ExportColumn::make('major')
                ->label('Jurusan'),

            ExportColumn::make('class')
                ->label('Kelas'),

            ExportColumn::make('status')
                ->label('Status'),

            ExportColumn::make('entry_year')
                ->label('Tahun Masuk'),

            ExportColumn::make('graduation_year')
                ->label('Tahun Lulus'),

            ExportColumn::make('description')
                ->label('Deskripsi'),
        ];
    }

    public static function getCompletedNotificationBody(
        Export $export
    ): string {
        $body = 'Export data siswa telah selesai. ' .
            number_format($export->successful_rows) .
            ' data berhasil diekspor.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' .
                number_format($failedRowsCount) .
                ' data gagal diekspor.';
        }

        return $body;
    }
}