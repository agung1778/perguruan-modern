<?php

namespace App\Filament\Resources\Teachers;

use App\Filament\Exports\TeacherExporter;
use App\Filament\Imports\TeacherImporter;
use App\Models\Teacher;

use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Actions\ExportAction;
use Filament\Actions\ImportAction;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class TeacherResource extends Resource
{
    protected static ?string $model = Teacher::class;

    protected static string|BackedEnum|null $navigationIcon =
        'heroicon-o-user-group';

    protected static string|UnitEnum|null $navigationGroup =
        'Data Pendidikan';

    protected static ?string $navigationLabel =
        'Data Guru';

    protected static ?string $modelLabel =
        'Guru';

    protected static ?string $pluralModelLabel =
        'Data Guru';

    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return \App\Filament\Resources\Teachers\Schemas\TeacherForm::configure(
            $schema
        );
    }

    public static function table(Table $table): Table
    {
        return \App\Filament\Resources\Teachers\Tables\TeachersTable::configure(
            $table
        );
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTeachers::route('/'),
            'create' => Pages\CreateTeacher::route('/create'),
            'edit' => Pages\EditTeacher::route('/{record}/edit'),
        ];
    }
}