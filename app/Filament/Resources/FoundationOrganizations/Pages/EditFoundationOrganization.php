<?php

namespace App\Filament\Resources\FoundationOrganizations\Pages;

use App\Filament\Resources\FoundationOrganizations\FoundationOrganizationResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditFoundationOrganization extends EditRecord
{
    protected static string $resource = FoundationOrganizationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
