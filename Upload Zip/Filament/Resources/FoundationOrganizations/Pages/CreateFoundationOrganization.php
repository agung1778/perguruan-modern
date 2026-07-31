<?php

namespace App\Filament\Resources\FoundationOrganizations\Pages;

use App\Filament\Resources\FoundationOrganizations\FoundationOrganizationResource;
use Filament\Resources\Pages\CreateRecord;

class CreateFoundationOrganization extends CreateRecord
{
    protected static string $resource =
        FoundationOrganizationResource::class;

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Data organisasi berhasil ditambahkan.';
    }
}