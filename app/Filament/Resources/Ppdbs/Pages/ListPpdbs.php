<?php

namespace App\Filament\Resources\PPDBs\Pages;

use App\Filament\Resources\PPDBs\PPDBResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPPDBs extends ListRecords
{
    protected static string $resource = PPDBResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Tambah PPDB'),
        ];
    }
}