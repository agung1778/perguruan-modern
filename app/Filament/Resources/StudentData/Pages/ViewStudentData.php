<?php

namespace App\Filament\Resources\StudentData\Pages;

use App\Filament\Resources\StudentData\StudentDataResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewStudentData extends ViewRecord
{
    protected static string $resource = StudentDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
