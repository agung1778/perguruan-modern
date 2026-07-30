<?php

namespace App\Filament\Resources\StudentData;

use App\Filament\Resources\StudentData\Pages\CreateStudentData;
use App\Filament\Resources\StudentData\Pages\EditStudentData;
use App\Filament\Resources\StudentData\Pages\ListStudentData;
use App\Filament\Resources\StudentData\Schemas\StudentDataForm;
use App\Filament\Resources\StudentData\Tables\StudentDataTable;
use App\Models\StudentData;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use UnitEnum;

class StudentDataResource extends Resource
{
    protected static ?string $model = StudentData::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-academic-cap';

    protected static string|UnitEnum|null $navigationGroup = 'Data Pendidikan';

    protected static ?string $navigationLabel = 'Data Murid';

    protected static ?string $modelLabel = 'Data Murid';

    protected static ?string $pluralModelLabel = 'Data Murid';

    protected static ?int $navigationSort =2;
    public static function form(Schema $schema): Schema
    {
        return StudentDataForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StudentDataTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListStudentData::route('/'),
            'create' => CreateStudentData::route('/create'),
            'edit' => EditStudentData::route('/{record}/edit'),
        ];
    }
}