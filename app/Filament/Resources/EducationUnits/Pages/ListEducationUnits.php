<?php

namespace App\Filament\Resources\EducationUnits\Pages;

use App\Filament\Resources\EducationUnits\EducationUnitResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEducationUnits extends ListRecords
{
    protected static string $resource = EducationUnitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Tambah Unit Pendidikan'),
        ];
    }
}