<?php

namespace App\Filament\Resources\FoundationLeaders\Pages;

use App\Filament\Resources\FoundationLeaders\FoundationLeaderResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewFoundationLeader extends ViewRecord
{
    protected static string $resource = FoundationLeaderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
