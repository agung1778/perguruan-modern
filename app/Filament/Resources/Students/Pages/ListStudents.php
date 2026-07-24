<?php

namespace App\Filament\Resources\Students\Pages;

use App\Exports\StudentsExport;
use App\Exports\StudentsTemplateExport;
use App\Filament\Resources\Students\StudentResource;
use App\Imports\StudentsImport;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Actions\ImportAction;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;

class ListStudents extends ListRecords
{
    protected static string $resource =
        StudentResource::class;

    protected function getHeaderActions(): array
    {
        return [

            /*
            |--------------------------------------------------------------------------
            | TAMBAH MANUAL
            |--------------------------------------------------------------------------
            */

            CreateAction::make()
                ->label(
                    'Tambah Siswa'
                ),

            /*
            |--------------------------------------------------------------------------
            | DOWNLOAD TEMPLATE
            |--------------------------------------------------------------------------
            */

            Action::make(
                'downloadTemplate'
            )
                ->label(
                    'Download Template'
                )
                ->icon(
                    'heroicon-o-document-arrow-down'
                )
                ->action(
                    fn () =>
                        Excel::download(
                            new StudentsTemplateExport(),
                            'template-import-siswa.xlsx'
                        )
                ),

            /*
            |--------------------------------------------------------------------------
            | IMPORT EXCEL
            |--------------------------------------------------------------------------
            */

            ImportAction::make(
                'importStudents'
            )
                ->label(
                    'Import Excel'
                )
                ->icon(
                    'heroicon-o-arrow-up-tray'
                )
                ->importer(
                    StudentsImport::class
                ),

            /*
            |--------------------------------------------------------------------------
            | EXPORT SEMUA
            |--------------------------------------------------------------------------
            */

            Action::make(
                'exportAll'
            )
                ->label(
                    'Export Semua'
                )
                ->icon(
                    'heroicon-o-arrow-down-tray'
                )
                ->action(
                    fn () =>
                        Excel::download(
                            new StudentsExport(),
                            'data-siswa.xlsx'
                        )
                ),

        ];
    }
}