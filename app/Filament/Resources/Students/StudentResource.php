<?php

namespace App\Filament\Resources\Students;

use App\Filament\Resources\Students\Schemas\StudentForm;
use App\Filament\Resources\Students\Tables\StudentsTable;
use App\Models\Student;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use UnitEnum;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static string|BackedEnum|null $navigationIcon =
        'heroicon-o-academic-cap';

    protected static string|UnitEnum|null $navigationGroup =
        'Data Pendidikan';

    protected static ?string $navigationLabel =
        'Data Siswa';

    protected static ?string $modelLabel =
        'Siswa';

    protected static ?string $pluralModelLabel =
        'Data Siswa';

    protected static ?int $navigationSort =
        1;

    public static function form(
        Schema $schema
    ): Schema {
        return StudentForm::configure(
            $schema
        );
    }

    public static function table(
        Table $table
    ): Table {
        return StudentsTable::configure(
            $table
        );
    }

    public static function getPages(): array
    {
        return [
            'index' =>
                Pages\ListStudents::route('/'),

            'create' =>
                Pages\CreateStudent::route('/create'),

            'edit' =>
                Pages\EditStudent::route(
                    '/{record}/edit'
                ),
        ];
    }
}