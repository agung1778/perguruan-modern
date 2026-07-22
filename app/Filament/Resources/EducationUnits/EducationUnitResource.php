<?php

namespace App\Filament\Resources\EducationUnits;

use App\Filament\Resources\EducationUnits\Schemas\EducationUnitForm;
use App\Filament\Resources\EducationUnits\Tables\EducationUnitsTable;
use App\Models\EducationUnit;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use UnitEnum;

class EducationUnitResource extends Resource
{
    protected static ?string $model = EducationUnit::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-academic-cap';

    protected static string|UnitEnum|null $navigationGroup = 'Pendidikan';

    protected static ?string $navigationLabel = 'Unit Pendidikan';

    protected static ?string $modelLabel = 'Unit Pendidikan';

    protected static ?string $pluralModelLabel = 'Unit Pendidikan';

    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return EducationUnitForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EducationUnitsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEducationUnits::route('/'),
            'create' => Pages\CreateEducationUnit::route('/create'),
            'edit' => Pages\EditEducationUnit::route('/{record}/edit'),
        ];
    }
}