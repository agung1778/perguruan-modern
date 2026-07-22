<?php

namespace App\Filament\Resources\Teachers;

use App\Filament\Resources\Teachers\Pages\CreateTeacher;
use App\Filament\Resources\Teachers\Pages\EditTeacher;
use App\Filament\Resources\Teachers\Pages\ListTeachers;
use App\Filament\Resources\Teachers\Schemas\TeacherForm;
use App\Filament\Resources\Teachers\Tables\TeacherTable;
use App\Models\Teacher;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class TeacherResource extends Resource
{
    protected static ?string $model = Teacher::class;

    protected static ?string $modelLabel = 'Guru & Karyawan';

    protected static ?string $pluralModelLabel = 'Guru & Karyawan';

    protected static ?string $navigationLabel = 'Guru & Karyawan';

    protected static string|\BackedEnum|null $navigationIcon =
        'heroicon-o-user-group';

    protected static string|\UnitEnum|null $navigationGroup =
        'Akademik';

    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return TeacherForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TeacherTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTeachers::route('/'),
            'create' => CreateTeacher::route('/create'),
            'edit' => EditTeacher::route('/{record}/edit'),
        ];
    }
}