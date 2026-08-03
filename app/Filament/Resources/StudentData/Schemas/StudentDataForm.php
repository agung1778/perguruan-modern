<?php

namespace App\Filament\Resources\StudentData\Schemas;

use App\Models\Major;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
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
                | INFORMASI AKADEMIK
                |--------------------------------------------------------------------------
                */

                Section::make('Informasi Akademik')
                    ->description(
                        'Tentukan unit pendidikan, tahun ajaran, angkatan, dan jurusan siswa.'
                    )
                    ->icon('heroicon-o-academic-cap')
                    ->schema([

                        Grid::make()
                            ->columns([
                                'default' => 1,
                                'sm' => 2,
                                'lg' => 2,
                            ])
                            ->schema([

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
                                    ->placeholder('Pilih unit pendidikan')
                                    ->native(false)
                                    ->afterStateUpdated(
                                        fn (callable $set) =>
                                        $set('major_id', null)
                                    )
                                    ->helperText(
                                        'Pilih unit pendidikan tempat siswa terdaftar.'
                                    ),

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
                                    ->prefixIcon('heroicon-o-calendar-days')
                                    ->helperText(
                                        'Masukkan tahun ajaran, contoh: 2025/2026.'
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
                                    ->prefixIcon('heroicon-o-user-group')
                                    ->helperText(
                                        'Opsional. Masukkan angkatan secara manual.'
                                    ),

                                /*
                                |--------------------------------------------------------------------------
                                | JURUSAN
                                |--------------------------------------------------------------------------
                                */

                                Select::make('major_id')
                                    ->label('Jurusan')
                                    ->options(function (callable $get): array {
                                        $educationUnitId = $get(
                                            'education_unit_id'
                                        );

                                        if (blank($educationUnitId)) {
                                            return [];
                                        }

                                        return Major::query()
                                            ->where(
                                                'education_unit_id',
                                                $educationUnitId
                                            )
                                            ->where(
                                                'is_active',
                                                true
                                            )
                                            ->orderBy(
                                                'sort_order'
                                            )
                                            ->orderBy(
                                                'name'
                                            )
                                            ->pluck(
                                                'name',
                                                'id'
                                            )
                                            ->toArray();
                                    })
                                    ->searchable()
                                    ->preload()
                                    ->native(false)
                                    ->live()
                                    ->nullable()
                                    ->placeholder(
                                        'Pilih jurusan (opsional)'
                                    )
                                    ->disabled(
                                        fn (callable $get): bool =>
                                        blank(
                                            $get(
                                                'education_unit_id'
                                            )
                                        )
                                    )
                                    ->helperText(
                                        'Jurusan akan menyesuaikan unit pendidikan yang dipilih. Kosongkan untuk unit tanpa jurusan seperti TK, SD, atau SMP.'
                                    ),
                            ]),
                    ])
                    ->collapsible()
                    ->persistCollapsed(false),

                /*
                |--------------------------------------------------------------------------
                | DATA SISWA
                |--------------------------------------------------------------------------
                */

                Section::make('Data Siswa')
                    ->description(
                        'Masukkan jumlah siswa berdasarkan jenis kelamin. Total siswa akan dihitung otomatis.'
                    )
                    ->icon('heroicon-o-users')
                    ->schema([

                        Grid::make()
                            ->columns([
                                'default' => 1,
                                'sm' => 2,
                                'lg' => 3,
                            ])
                            ->schema([

                                /*
                                |--------------------------------------------------------------------------
                                | LAKI-LAKI
                                |--------------------------------------------------------------------------
                                */

                                TextInput::make('male_count')
                                    ->label('Siswa Laki-laki')
                                    ->numeric()
                                    ->minValue(0)
                                    ->default(0)
                                    ->required()
                                    ->live()
                                    ->inputMode('numeric')
                                    ->prefixIcon(
                                        'heroicon-o-user'
                                    )
                                    ->afterStateUpdated(
                                        function (
                                            $state,
                                            callable $set,
                                            callable $get
                                        ): void {
                                            $male = (int) (
                                                $state ?: 0
                                            );

                                            $female = (int) (
                                                $get(
                                                    'female_count'
                                                ) ?: 0
                                            );

                                            $set(
                                                'total_count',
                                                $male + $female
                                            );
                                        }
                                    ),

                                /*
                                |--------------------------------------------------------------------------
                                | PEREMPUAN
                                |--------------------------------------------------------------------------
                                */

                                TextInput::make('female_count')
                                    ->label('Siswa Perempuan')
                                    ->numeric()
                                    ->minValue(0)
                                    ->default(0)
                                    ->required()
                                    ->live()
                                    ->inputMode('numeric')
                                    ->prefixIcon(
                                        'heroicon-o-user'
                                    )
                                    ->afterStateUpdated(
                                        function (
                                            $state,
                                            callable $set,
                                            callable $get
                                        ): void {
                                            $male = (int) (
                                                $get(
                                                    'male_count'
                                                ) ?: 0
                                            );

                                            $female = (int) (
                                                $state ?: 0
                                            );

                                            $set(
                                                'total_count',
                                                $male + $female
                                            );
                                        }
                                    ),

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
                                    ->prefixIcon(
                                        'heroicon-o-calculator'
                                    )
                                    ->helperText(
                                        'Otomatis: laki-laki + perempuan.'
                                    ),
                            ]),
                    ])
                    ->collapsible()
                    ->persistCollapsed(false),

                /*
                |--------------------------------------------------------------------------
                | DATA BEASISWA
                |--------------------------------------------------------------------------
                */

                Section::make('Data Beasiswa')
                    ->description(
                        'Masukkan jumlah penerima beasiswa berdasarkan kategori.'
                    )
                    ->icon('heroicon-o-academic-cap')
                    ->schema([

                        Grid::make()
                            ->columns([
                                'default' => 1,
                                'sm' => 2,
                                'lg' => 3,
                            ])
                            ->schema([

                                /*
                                |--------------------------------------------------------------------------
                                | BEASISWA TAHFIZ
                                |--------------------------------------------------------------------------
                                */

                                TextInput::make(
                                    'scholarship_tahfiz'
                                )
                                    ->label(
                                        'Beasiswa Tahfiz'
                                    )
                                    ->numeric()
                                    ->minValue(0)
                                    ->default(0)
                                    ->required()
                                    ->inputMode('numeric')
                                    ->prefixIcon(
                                        'heroicon-o-book-open'
                                    ),

                                /*
                                |--------------------------------------------------------------------------
                                | BEASISWA AKADEMIK
                                |--------------------------------------------------------------------------
                                */

                                TextInput::make(
                                    'scholarship_akademik'
                                )
                                    ->label(
                                        'Beasiswa Akademik'
                                    )
                                    ->numeric()
                                    ->minValue(0)
                                    ->default(0)
                                    ->required()
                                    ->inputMode('numeric')
                                    ->prefixIcon(
                                        'heroicon-o-trophy'
                                    ),

                                /*
                                |--------------------------------------------------------------------------
                                | BEASISWA NON AKADEMIK
                                |--------------------------------------------------------------------------
                                */

                                TextInput::make(
                                    'scholarship_non_akademik'
                                )
                                    ->label(
                                        'Beasiswa Non-Akademik'
                                    )
                                    ->numeric()
                                    ->minValue(0)
                                    ->default(0)
                                    ->required()
                                    ->inputMode('numeric')
                                    ->prefixIcon(
                                        'heroicon-o-star'
                                    ),

                                /*
                                |--------------------------------------------------------------------------
                                | BEASISWA YATIM
                                |--------------------------------------------------------------------------
                                */

                                TextInput::make(
                                    'scholarship_yatim'
                                )
                                    ->label(
                                        'Beasiswa Yatim'
                                    )
                                    ->numeric()
                                    ->minValue(0)
                                    ->default(0)
                                    ->required()
                                    ->inputMode('numeric')
                                    ->prefixIcon(
                                        'heroicon-o-heart'
                                    ),

                                /*
                                |--------------------------------------------------------------------------
                                | BEASISWA YAYASAN
                                |--------------------------------------------------------------------------
                                */

                                TextInput::make(
                                    'scholarship_yayasan'
                                )
                                    ->label(
                                        'Beasiswa Yayasan'
                                    )
                                    ->numeric()
                                    ->minValue(0)
                                    ->default(0)
                                    ->required()
                                    ->inputMode('numeric')
                                    ->prefixIcon(
                                        'heroicon-o-building-library'
                                    ),
                            ]),
                    ])
                    ->collapsible()
                    ->persistCollapsed(false),
            ]);
    }
}
