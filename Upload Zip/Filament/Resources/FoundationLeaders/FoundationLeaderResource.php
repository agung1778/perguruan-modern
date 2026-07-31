<?php

namespace App\Filament\Resources\FoundationLeaders;

use App\Filament\Resources\FoundationLeaders\Schemas\FoundationLeaderForm;
use App\Filament\Resources\FoundationLeaders\Tables\FoundationLeadersTable;
use App\Models\FoundationLeader;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use UnitEnum;

class FoundationLeaderResource extends Resource
{
    protected static ?string $model = FoundationLeader::class;

    protected static string|BackedEnum|null $navigationIcon =
        'heroicon-o-user-group';

    protected static string|UnitEnum|null $navigationGroup =
        'Perguruan';

    protected static ?string $navigationLabel =
        'Pimpinan Perguruan';

    protected static ?string $modelLabel =
        'Pimpinan Perguruan';

    protected static ?string $pluralModelLabel =
        'Pimpinan Perguruan';

    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return FoundationLeaderForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FoundationLeadersTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFoundationLeaders::route('/'),
            'create' => Pages\CreateFoundationLeader::route('/create'),
            'edit' => Pages\EditFoundationLeader::route('/{record}/edit'),
        ];
    }
}