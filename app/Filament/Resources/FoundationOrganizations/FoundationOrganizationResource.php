<?php

namespace App\Filament\Resources\FoundationOrganizations;

use App\Filament\Resources\FoundationOrganizations\Schemas\FoundationOrganizationForm;
use App\Filament\Resources\FoundationOrganizations\Tables\FoundationOrganizationsTable;
use App\Models\FoundationOrganization;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use UnitEnum;

class FoundationOrganizationResource extends Resource
{
    protected static ?string $model = FoundationOrganization::class;

    protected static string|BackedEnum|null $navigationIcon =
        'heroicon-o-building-office-2';

    protected static string|UnitEnum|null $navigationGroup =
        'Perguruan';

    protected static ?string $navigationLabel =
        'Struktur Organisasi';

    protected static ?string $modelLabel =
        'Struktur Organisasi';

    protected static ?string $pluralModelLabel =
        'Struktur Organisasi';

    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return FoundationOrganizationForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FoundationOrganizationsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFoundationOrganizations::route('/'),
            'create' => Pages\CreateFoundationOrganization::route('/create'),
            'edit' => Pages\EditFoundationOrganization::route('/{record}/edit'),
        ];
    }
}