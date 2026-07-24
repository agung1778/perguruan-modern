<?php

namespace App\Filament\Resources\EducationUnits\Pages;

use App\Filament\Resources\EducationUnits\EducationUnitResource;
use Filament\Resources\Pages\EditRecord;

class EditEducationUnit extends EditRecord
{
    protected static string $resource = EducationUnitResource::class;

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Unit pendidikan berhasil diperbarui.';
    }
}