<?php

namespace App\Filament\Resources\StudentData;

use App\Filament\Resources\StudentData\Pages\CreateStudentData;
use App\Filament\Resources\StudentData\Pages\EditStudentData;
use App\Filament\Resources\StudentData\Pages\ListStudentData;
use App\Filament\Resources\StudentData\Schemas\StudentDataForm;
use App\Filament\Resources\StudentData\Tables\StudentDataTable;
use App\Models\StudentData;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class StudentDataResource extends Resource
{
    protected static ?string $model = StudentData::class;

    protected static ?string $modelLabel = 'Data Siswa';

    protected static ?string $pluralModelLabel = 'Data Siswa';

    protected static ?string $navigationLabel = 'Data Siswa';

    protected static string|\UnitEnum|null $navigationGroup = 'Data Pendidikan';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-users';
    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return StudentDataForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StudentDataTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
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
