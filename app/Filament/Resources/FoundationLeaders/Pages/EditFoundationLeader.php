<?php

namespace App\Filament\Resources\FoundationLeaders\Pages;

use App\Filament\Resources\FoundationLeaders\FoundationLeaderResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditFoundationLeader extends EditRecord
{
    protected static string $resource = FoundationLeaderResource::class;

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
