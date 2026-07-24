<?php

namespace App\Filament\Resources\Abouts;

use App\Filament\Resources\Abouts\Schemas\AboutForm;
use App\Models\About;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use UnitEnum;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static string|BackedEnum|null $navigationIcon =
        'heroicon-o-information-circle';

    protected static string|UnitEnum|null $navigationGroup =
        'Website';

    protected static ?string $navigationLabel =
        'Tentang Perguruan';

    protected static ?string $modelLabel =
        'Tentang Perguruan';

    protected static ?string $pluralModelLabel =
        'Tentang Perguruan';

    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return AboutForm::configure($schema);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}