<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class StudentForm
{
    public static function configure(
        Schema $schema
    ): Schema {
        return $schema
            ->components([

                /*
                |--------------------------------------------------------------------------
                | IDENTITAS
                |--------------------------------------------------------------------------
                */

                Section::make('Identitas Siswa')
                    ->description(
                        'Informasi dasar peserta didik.'
                    )
                    ->icon(
                        'heroicon-o-user'
                    )
                    ->schema([

                        TextInput::make('name')
                            ->label('Nama Lengkap')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('nisn')
                            ->label('NISN')
                            ->maxLength(20)
                            ->unique(
                                ignoreRecord: true
                            ),

                        Select::make(
                            'education_unit_id'
                        )
                            ->label(
                                'Unit Pendidikan'
                            )
                            ->relationship(
                                'educationUnit',
                                'name'
                            )
                            ->searchable()
                            ->preload()
                            ->required(),

                        FileUpload::make('photo')
                            ->label(
                                'Foto Siswa'
                            )
                            ->image()
                            ->disk('public')
                            ->directory(
                                'students'
                            )
                            ->visibility('public')
                            ->imageEditor()
                            ->maxSize(2048),

                    ])
                    ->columns(2),

                /*
                |--------------------------------------------------------------------------
                | DATA PRIBADI
                |--------------------------------------------------------------------------
                */

                Section::make('Data Pribadi')
                    ->icon(
                        'heroicon-o-identification'
                    )
                    ->schema([

                        Select::make('gender')
                            ->label(
                                'Jenis Kelamin'
                            )
                            ->options([
                                'L' => 'Laki-laki',
                                'P' => 'Perempuan',
                            ])
                            ->required(),

                        TextInput::make(
                            'birth_place'
                        )
                            ->label(
                                'Tempat Lahir'
                            )
                            ->maxLength(100),

                        DatePicker::make(
                            'birth_date'
                        )
                            ->label(
                                'Tanggal Lahir'
                            )
                            ->native(false)
                            ->displayFormat(
                                'd F Y'
                            ),

                    ])
                    ->columns(3),

                /*
                |--------------------------------------------------------------------------
                | DATA PENDIDIKAN
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Data Pendidikan'
                )
                    ->icon(
                        'heroicon-o-academic-cap'
                    )
                    ->schema([

                        TextInput::make('batch')
                            ->label(
                                'Angkatan'
                            )
                            ->numeric()
                            ->maxLength(4),

                        TextInput::make('major')
                            ->label(
                                'Jurusan'
                            )
                            ->maxLength(255),

                        TextInput::make('class')
                            ->label(
                                'Kelas'
                            )
                            ->maxLength(50),

                        TextInput::make(
                            'entry_year'
                        )
                            ->label(
                                'Tahun Masuk'
                            )
                            ->numeric()
                            ->minValue(2000)
                            ->maxValue(
                                now()->year + 10
                            ),

                        TextInput::make(
                            'graduation_year'
                        )
                            ->label(
                                'Tahun Lulus'
                            )
                            ->numeric()
                            ->minValue(2000)
                            ->maxValue(
                                now()->year + 10
                            ),

                        Select::make('status')
                            ->label(
                                'Status Siswa'
                            )
                            ->options([
                                'active' =>
                                    'Aktif',

                                'graduated' =>
                                    'Lulus',

                                'inactive' =>
                                    'Tidak Aktif',

                                'transferred' =>
                                    'Pindah',

                                'dropped_out' =>
                                    'Keluar',
                            ])
                            ->default(
                                'active'
                            )
                            ->required(),

                    ])
                    ->columns(3),

                /*
                |--------------------------------------------------------------------------
                | KETERANGAN
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Keterangan'
                )
                    ->icon(
                        'heroicon-o-document-text'
                    )
                    ->schema([

                        Textarea::make(
                            'description'
                        )
                            ->label(
                                'Keterangan'
                            )
                            ->rows(5)
                            ->columnSpanFull(),

                    ]),

            ]);
    }
}