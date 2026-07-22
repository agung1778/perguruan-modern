<?php

namespace App\Filament\Resources\Ppdbs;

use App\Filament\Resources\Ppdbs\Pages\CreatePpdb;
use App\Filament\Resources\Ppdbs\Pages\EditPpdb;
use App\Filament\Resources\Ppdbs\Pages\ListPpdbs;
use App\Filament\Resources\Ppdbs\Pages\ViewPpdb;
use App\Filament\Resources\Ppdbs\Schemas\PpdbForm;
use App\Filament\Resources\Ppdbs\Tables\PpdbsTable;
use App\Models\Ppdb;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class PpdbResource extends Resource
{
    protected static ?string $model = Ppdb::class;

    protected static ?string $modelLabel = 'PPDB';

    protected static ?string $pluralModelLabel = 'Data PPDB';

    protected static ?string $navigationLabel = 'PPDB';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-academic-cap';

    public static function form(
        Schema $schema
    ): Schema {
        return PpdbForm::configure($schema);
    }

    public static function table(
        Table $table
    ): Table {
        return PpdbsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPpdbs::route('/'),
            'create' => CreatePpdb::route('/create'),
            'view' => ViewPpdb::route('/{record}'),
            'edit' => EditPpdb::route('/{record}/edit'),
        ];
    }
}