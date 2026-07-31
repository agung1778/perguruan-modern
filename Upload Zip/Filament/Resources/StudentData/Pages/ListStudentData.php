<?php

namespace App\Filament\Resources\StudentData\Pages;

use App\Filament\Resources\StudentData\StudentDataResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListStudentData extends ListRecords
{
    protected static string $resource = StudentDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
