<?php

namespace App\Filament\Resources\FoundationLeaders\Pages;

use App\Filament\Resources\FoundationLeaders\FoundationLeaderResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFoundationLeaders extends ListRecords
{
    protected static string $resource =
        FoundationLeaderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Tambah Pimpinan'),
        ];
    }
}