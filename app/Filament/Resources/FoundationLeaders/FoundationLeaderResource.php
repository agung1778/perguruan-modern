<?php

namespace App\Filament\Resources\FoundationLeaders;

use App\Filament\Resources\FoundationLeaders\Pages\CreateFoundationLeader;
use App\Filament\Resources\FoundationLeaders\Pages\EditFoundationLeader;
use App\Filament\Resources\FoundationLeaders\Pages\ListFoundationLeaders;
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

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-user-circle';

    protected static string|UnitEnum|null $navigationGroup = 'Yayasan';

    protected static ?string $navigationLabel = 'Kepala Yayasan';

    protected static ?string $modelLabel = 'Kepala Yayasan';

    protected static ?string $pluralModelLabel = 'Kepala Yayasan';

    protected static ?int $navigationSort = 1;

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
            'index'  => ListFoundationLeaders::route('/'),
            'create' => CreateFoundationLeader::route('/create'),
            'edit'   => EditFoundationLeader::route('/{record}/edit'),
        ];
    }
}