<?php

namespace App\Filament\Resources\GalleryPhotos\Pages;

use App\Filament\Resources\GalleryPhotos\GalleryPhotoResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewGalleryPhoto extends ViewRecord
{
    protected static string $resource = GalleryPhotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
