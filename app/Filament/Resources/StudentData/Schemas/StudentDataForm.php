<?php

namespace App\Filament\Resources\StudentData\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class StudentDataForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                /*
                |--------------------------------------------------------------------------
                | INFORMASI PENDIDIKAN
                |--------------------------------------------------------------------------
                */

                Section::make('Informasi Pendidikan')
                    ->description(
                        'Masukkan informasi unit pendidikan dan tahun data yang akan dicatat.'
                    )
                    ->icon('heroicon-o-academic-cap')
                    ->schema([

                        Grid::make([
                            'default' => 1,
                            'md' => 2,
                        ])
                            ->schema([

                                Select::make('education_unit_id')
                                    ->label('Unit Pendidikan')
                                    ->relationship(
                                        name: 'educationUnit',
                                        titleAttribute: 'name'
                                    )
                                    ->searchable()
                                    ->preload()
                                    ->required()
                                    ->placeholder('Pilih unit pendidikan'),

                                TextInput::make('academic_year')
                                    ->label('Tahun Ajaran')
                                    ->placeholder('Contoh: 2026/2027')
                                    ->required()
                                    ->maxLength(9)
                                    ->minLength(9)
                                    ->rule('regex:/^\d{4}\/\d{4}$/')
                                    ->validationMessages([
                                        'regex' => 'Format tahun ajaran harus seperti 2026/2027.',
                                        'minLength' => 'Tahun ajaran harus berformat 2026/2027.',
                                        'maxLength' => 'Tahun ajaran harus berformat 2026/2027.',
                                    ])
                                    ->default(
                                        now()->year . '/' . (now()->year + 1)
                                    ),
                            ]),

                        Grid::make([
                            'default' => 1,
                            'md' => 2,
                        ])
                            ->schema([

                                TextInput::make('class')
                                    ->label('Kelas')
                                    ->placeholder('Contoh: X, XI, XII')
                                    ->maxLength(50),

                                TextInput::make('major')
                                    ->label('Jurusan')
                                    ->placeholder('Contoh: PPLG, AKL, MPLB')
                                    ->maxLength(100),
                            ]),
                    ]),

                /*
                |--------------------------------------------------------------------------
                | DATA JUMLAH MURID
                |--------------------------------------------------------------------------
                */

                Section::make('Data Jumlah Murid')
                    ->description(
                        'Masukkan jumlah murid berdasarkan jenis kelamin. Total murid dihitung otomatis.'
                    )
                    ->icon('heroicon-o-users')
                    ->schema([

                        Grid::make([
                            'default' => 1,
                            'md' => 3,
                        ])
                            ->schema([

                                TextInput::make('male_count')
                                    ->label('Laki-laki')
                                    ->helperText('Jumlah murid laki-laki')
                                    ->numeric()
                                    ->minValue(0)
                                    ->default(0)
                                    ->required()
                                    ->live()
                                    ->afterStateUpdated(
                                        function ($state, $set, $get): void {
                                            $male = (int) $state;
                                            $female = (int) (
                                                $get('female_count') ?? 0
                                            );

                                            $set(
                                                'total_count',
                                                $male + $female
                                            );
                                        }
                                    ),

                                TextInput::make('female_count')
                                    ->label('Perempuan')
                                    ->helperText('Jumlah murid perempuan')
                                    ->numeric()
                                    ->minValue(0)
                                    ->default(0)
                                    ->required()
                                    ->live()
                                    ->afterStateUpdated(
                                        function ($state, $set, $get): void {
                                            $male = (int) (
                                                $get('male_count') ?? 0
                                            );

                                            $female = (int) $state;

                                            $set(
                                                'total_count',
                                                $male + $female
                                            );
                                        }
                                    ),

                                TextInput::make('total_count')
                                    ->label('Total Murid')
                                    ->helperText(
                                        'Otomatis dari laki-laki + perempuan'
                                    )
                                    ->numeric()
                                    ->disabled()
                                    ->dehydrated()
                                    ->default(0),
                            ]),
                    ]),

                /*
                |--------------------------------------------------------------------------
                | DATA BEASISWA
                |--------------------------------------------------------------------------
                */

                Section::make('Data Penerima Beasiswa')
                    ->description(
                        'Masukkan jumlah murid yang menerima masing-masing jenis beasiswa.'
                    )
                    ->icon('heroicon-o-sparkles')
                    ->schema([

                        Grid::make([
                            'default' => 1,
                            'md' => 2,
                        ])
                            ->schema([

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
                            ]),

                        TextInput::make('total_scholarship')
                            ->label('Total Penerima Beasiswa')
                            ->helperText(
                                'Dihitung otomatis dari seluruh jenis beasiswa.'
                            )
                            ->numeric()
                            ->disabled()
                            ->dehydrated(false)
                            ->default(0)
                            ->afterStateHydrated(
                                function ($component, $get): void {
                                    $total =
                                        (int) ($get('scholarship_tahfiz') ?? 0)
                                        + (int) ($get('scholarship_akademik') ?? 0)
                                        + (int) ($get('scholarship_non_akademik') ?? 0)
                                        + (int) ($get('scholarship_yatim') ?? 0)
                                        + (int) ($get('scholarship_yayasan') ?? 0);

                                    $component->state($total);
                                }
                            ),
                    ]),
            ]);
    }
}
