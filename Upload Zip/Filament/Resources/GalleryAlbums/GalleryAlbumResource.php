<?php

namespace App\Filament\Resources\GalleryAlbums;

use App\Filament\Resources\GalleryAlbums\Schemas\GalleryAlbumForm;
use App\Filament\Resources\GalleryAlbums\Tables\GalleryAlbumsTable;
use App\Models\GalleryAlbum;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use UnitEnum;

class GalleryAlbumResource extends Resource
{
    protected static ?string $model = GalleryAlbum::class;

    protected static string|BackedEnum|null $navigationIcon =
        'heroicon-o-photo';

    protected static string|UnitEnum|null $navigationGroup =
        'Galeri';

    protected static ?string $navigationLabel =
        'Album Galeri';

    protected static ?string $modelLabel =
        'Album Galeri';

    protected static ?string $pluralModelLabel =
        'Album Galeri';

    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return GalleryAlbumForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GalleryAlbumsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGalleryAlbums::route('/'),
            'create' => Pages\CreateGalleryAlbum::route('/create'),
            'edit' => Pages\EditGalleryAlbum::route('/{record}/edit'),
        ];
    }
}