<?php

namespace App\Filament\Resources\FoundationOrganizations\Pages;

use App\Filament\Resources\FoundationOrganizations\FoundationOrganizationResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditFoundationOrganization extends EditRecord
{
    protected static string $resource =
        FoundationOrganizationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Data organisasi berhasil diperbarui.';
    }
}