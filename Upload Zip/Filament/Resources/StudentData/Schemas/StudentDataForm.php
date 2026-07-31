<?php

namespace App\Filament\Resources\StudentData\Schemas;

use App\Models\Major;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Get;
use Illuminate\Database\Eloquent\Builder;

class StudentDataForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                /*
                |--------------------------------------------------------------------------
                | UNIT PENDIDIKAN
                |--------------------------------------------------------------------------
                */

                Select::make('education_unit_id')
                    ->label('Unit Pendidikan')
                    ->relationship(
                        name: 'educationUnit',
                        titleAttribute: 'name'
                    )
                    ->searchable()
                    ->preload()
                    ->live()
                    ->required()
                    ->afterStateUpdated(function ($set) {
                        $set('major_id', null);
                    }),


                /*
                |--------------------------------------------------------------------------
                | TAHUN AJARAN
                |--------------------------------------------------------------------------
                */

                TextInput::make('academic_year')
                    ->label('Tahun Ajaran')
                    ->placeholder('Contoh: 2025/2026')
                    ->maxLength(20)
                    ->required()
                    ->helperText(
                        'Masukkan tahun ajaran, contoh: 2025/2026'
                    ),


                /*
                |--------------------------------------------------------------------------
                | ANGKATAN
                |--------------------------------------------------------------------------
                */

                TextInput::make('generation')
                    ->label('Angkatan')
                    ->placeholder('Contoh: 2025')
                    ->maxLength(50)
                    ->nullable()
                    ->helperText(
                        'Masukkan angkatan secara manual, contoh: 2025.'
                    ),


                /*
                |--------------------------------------------------------------------------
                | JURUSAN
                |--------------------------------------------------------------------------
                */

                Select::make('major_id')
                    ->label('Jurusan')
                    ->options(function ($get) {
                        $educationUnitId = $get('education_unit_id');

                        if (blank($educationUnitId)) {
                            return [];
                        }

                        return \App\Models\Major::query()
                            ->where('education_unit_id', $educationUnitId)
                            ->where('is_active', true)
                            ->orderBy('sort_order')
                            ->orderBy('name')
                            ->pluck('name', 'id')
                            ->toArray();
                    })
                    ->searchable()
                    ->preload()
                    ->live()
                    ->nullable()
                    ->helperText(
                        'Kosongkan jika unit pendidikan tidak memiliki jurusan.'
                    ),


                /*
                |--------------------------------------------------------------------------
                | JUMLAH LAKI-LAKI
                |--------------------------------------------------------------------------
                */

                TextInput::make('male_count')
                    ->label('Jumlah Siswa Laki-laki')
                    ->numeric()
                    ->minValue(0)
                    ->default(0)
                    ->required()
                    ->live()
                    ->afterStateUpdated(function (
                        $state,
                        callable $set,
                        callable $get
                    ) {
                        $male = (int) (
                            $state ?: 0
                        );

                        $female = (int) (
                            $get('female_count') ?: 0
                        );

                        $set(
                            'total_count',
                            $male + $female
                        );
                    }),


                /*
                |--------------------------------------------------------------------------
                | JUMLAH PEREMPUAN
                |--------------------------------------------------------------------------
                */

                TextInput::make('female_count')
                    ->label('Jumlah Siswa Perempuan')
                    ->numeric()
                    ->minValue(0)
                    ->default(0)
                    ->required()
                    ->live()
                    ->afterStateUpdated(function (
                        $state,
                        callable $set,
                        callable $get
                    ) {
                        $male = (int) (
                            $get('male_count') ?: 0
                        );

                        $female = (int) (
                            $state ?: 0
                        );

                        $set(
                            'total_count',
                            $male + $female
                        );
                    }),


                /*
                |--------------------------------------------------------------------------
                | TOTAL SISWA
                |--------------------------------------------------------------------------
                */

                TextInput::make('total_count')
                    ->label('Total Siswa')
                    ->numeric()
                    ->default(0)
                    ->readOnly()
                    ->dehydrated()
                    ->helperText(
                        'Otomatis dihitung dari jumlah laki-laki + perempuan.'
                    ),


                /*
                |--------------------------------------------------------------------------
                | BEASISWA
                |--------------------------------------------------------------------------
                */

                TextInput::make('scholarship_tahfiz')
                    ->label('Beasiswa Tahfiz')
                    ->numeric()
                    ->minValue(0)
                    ->default(0)
                    ->required(),

                TextInput::make('scholarship_akademik')
                    ->label('Beasiswa Akademik')
                    ->numeric()
                    ->minValue(0)
                    ->default(0)
                    ->required(),

                TextInput::make('scholarship_non_akademik')
                    ->label('Beasiswa Non-Akademik')
                    ->numeric()
                    ->minValue(0)
                    ->default(0)
                    ->required(),

                TextInput::make('scholarship_yatim')
                    ->label('Beasiswa Yatim')
                    ->numeric()
                    ->minValue(0)
                    ->default(0)
                    ->required(),

                TextInput::make('scholarship_yayasan')
                    ->label('Beasiswa Yayasan')
                    ->numeric()
                    ->minValue(0)
                    ->default(0)
                    ->required(),

            ]);
    }
}
