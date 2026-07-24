<?php

namespace App\Filament\Resources\FoundationLeaders\Pages;

use App\Filament\Resources\FoundationLeaders\FoundationLeaderResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditFoundationLeader extends EditRecord
{
    protected static string $resource =
        FoundationLeaderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Data pimpinan berhasil diperbarui.';
    }
}