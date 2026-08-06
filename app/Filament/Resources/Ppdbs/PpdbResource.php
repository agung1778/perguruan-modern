<?php

namespace App\Filament\Resources\Ppdbs;

use App\Filament\Resources\Ppdbs\Schemas\PpdbForm;
use App\Filament\Resources\Ppdbs\Tables\PpdbsTable;
use App\Models\Ppdb;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use UnitEnum;

class PpdbResource extends Resource
{
    protected static ?string $model = Ppdb::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-academic-cap';

    protected static string|UnitEnum|null $navigationGroup = 'Data Pendidikan';

    protected static ?string $navigationLabel = 'PPDB';

    protected static ?string $modelLabel = 'PPDB';

    protected static ?string $pluralModelLabel = 'PPDB';

    protected static ?int $navigationSort = 5;

    public static function form(Schema $schema): Schema
    {
        return PpdbForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PpdbsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPpdbs::route('/'),
            'create' => Pages\CreatePpdb::route('/create'),
            'edit' => Pages\EditPpdb::route('/{record}/edit'),
        ];
    }
}