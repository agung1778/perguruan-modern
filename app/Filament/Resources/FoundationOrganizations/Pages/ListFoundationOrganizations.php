<?php

namespace App\Filament\Resources\FoundationOrganizations\Pages;

use App\Filament\Resources\FoundationOrganizations\FoundationOrganizationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFoundationOrganizations extends ListRecords
{
    protected static string $resource = FoundationOrganizationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Tambah Struktur Organisasi'),
        ];
    }
}