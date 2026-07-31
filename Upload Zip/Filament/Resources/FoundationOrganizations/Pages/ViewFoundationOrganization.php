<?php

namespace App\Filament\Resources\FoundationOrganizations\Pages;

use App\Filament\Resources\FoundationOrganizations\FoundationOrganizationResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewFoundationOrganization extends ViewRecord
{
    protected static string $resource = FoundationOrganizationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
