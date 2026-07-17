<?php

namespace App\Filament\Resources\GalleryPhotos;

use App\Filament\Resources\GalleryPhotos\Pages\CreateGalleryPhoto;
use App\Filament\Resources\GalleryPhotos\Pages\EditGalleryPhoto;
use App\Filament\Resources\GalleryPhotos\Pages\ListGalleryPhotos;
use App\Filament\Resources\GalleryPhotos\Schemas\GalleryPhotoForm;
use App\Filament\Resources\GalleryPhotos\Tables\GalleryPhotosTable;
use App\Models\GalleryPhoto;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use UnitEnum;

class GalleryPhotoResource extends Resource
{
    protected static ?string $model = GalleryPhoto::class;


    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-camera';


    protected static string|UnitEnum|null $navigationGroup = 'Website';


    protected static ?string $navigationLabel = 'Foto Galeri';


    protected static ?string $modelLabel = 'Foto Galeri';


    protected static ?string $pluralModelLabel = 'Foto Galeri';


    protected static ?int $navigationSort = 4;



    public static function form(Schema $schema): Schema
    {
        return GalleryPhotoForm::configure($schema);
    }



    public static function table(Table $table): Table
    {
        return GalleryPhotosTable::configure($table);
    }



    public static function getPages(): array
    {
        return [

            'index' => ListGalleryPhotos::route('/'),

            'create' => CreateGalleryPhoto::route('/create'),

            'edit' => EditGalleryPhoto::route('/{record}/edit'),

        ];
    }
}