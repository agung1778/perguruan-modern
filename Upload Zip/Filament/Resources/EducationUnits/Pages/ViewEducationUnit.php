<?php

namespace App\Filament\Resources\EducationUnits\Pages;

use App\Filament\Resources\EducationUnits\EducationUnitResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewEducationUnit extends ViewRecord
{
    protected static string $resource = EducationUnitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
