<?php

namespace App\Filament\Resources\StudentData\Pages;

use App\Filament\Resources\StudentData\StudentDataResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditStudentData extends EditRecord
{
    protected static string $resource = StudentDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
