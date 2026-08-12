<?php

namespace App\Filament\Exports;

use App\Models\Teacher;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class TeacherExporter extends Exporter
{
    protected static ?string $model = Teacher::class;

    public static function getColumns(): array
    {
        return [

            ExportColumn::make('educationUnit.name')
                ->label('Unit Pendidikan'),

            ExportColumn::make('name')
                ->label('Nama Guru'),

            ExportColumn::make('nip')
                ->label('NIP / NIK'),

            ExportColumn::make('gender')
                ->label('Jenis Kelamin'),

            ExportColumn::make('birth_place')
                ->label('Tempat Lahir'),

            ExportColumn::make('birth_date')
                ->label('Tanggal Lahir'),

            ExportColumn::make('position')
                ->label('Jabatan'),

            ExportColumn::make('status')
                ->label('Status'),

            ExportColumn::make('education')
                ->label('Pendidikan'),

            ExportColumn::make('description')
                ->label('Deskripsi'),

            ExportColumn::make('created_at')
                ->label('Tanggal Ditambahkan'),

        ];
    }

    public static function getCompletedNotificationBody(
        Export $export
    ): string {
        $body = 'Export data guru telah selesai. ' .
            number_format($export->successful_rows) .
            ' data berhasil diekspor.';

        return $body;
    }
}