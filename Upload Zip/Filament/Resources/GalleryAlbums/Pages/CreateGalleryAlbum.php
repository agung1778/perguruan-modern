<?php

namespace App\Filament\Resources\GalleryAlbums\Pages;

use App\Filament\Resources\GalleryAlbums\GalleryAlbumResource;
use Filament\Resources\Pages\CreateRecord;

class CreateGalleryAlbum extends CreateRecord
{
    protected static string $resource =
        GalleryAlbumResource::class;

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Album galeri berhasil ditambahkan.';
    }
}