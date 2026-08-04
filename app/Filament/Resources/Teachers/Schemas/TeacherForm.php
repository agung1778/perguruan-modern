<?php

namespace App\Filament\Resources\Teachers\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TeacherForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                /*
                |--------------------------------------------------------------------------
                | DATA UTAMA
                |--------------------------------------------------------------------------
                */

                Section::make('Data Tenaga Pendidik')
                    ->description(
                        'Kelola data guru dan karyawan/staff dalam satu sistem.'
                    )
                    ->icon('heroicon-o-user-group')
                    ->schema([

                        Select::make('type')
                            ->label('Jenis Tenaga Pendidik')
                            ->options([
                                'teacher' => 'Guru',
                                'staff' => 'Karyawan / Staff',
                            ])
                            ->default('teacher')
                            ->required()
                            ->native(false)
                            ->live(),

                        Select::make('education_unit_id')
                            ->label('Unit Pendidikan')
                            ->relationship(
                                'educationUnit',
                                'name'
                            )
                            ->searchable()
                            ->preload()
                            ->required(),

                        TextInput::make('name')
                            ->label('Nama Lengkap')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('nip')
                            ->label('NIP / NIK')
                            ->maxLength(100),

                        Select::make('gender')
                            ->label('Jenis Kelamin')
                            ->options([
                                'L' => 'Laki-laki',
                                'P' => 'Perempuan',
                            ])
                            ->native(false),

                        TextInput::make('position')
                            ->label('Jabatan')
                            ->placeholder(
                                'Contoh: Guru Matematika / Kepala Tata Usaha'
                            )
                            ->maxLength(255),

                        Select::make('employment_status')
                            ->label('Status Kepegawaian')
                            ->options([
                                'Tetap' => 'Tetap',
                                'Tidak Tetap' => 'Tidak Tetap',
                                'Honorer' => 'Honorer',
                                'Kontrak' => 'Kontrak',
                            ])
                            ->searchable()
                            ->native(false),

                        Toggle::make('is_active')
                            ->label('Status Aktif')
                            ->helperText(
                                'Aktifkan jika tenaga pendidik masih aktif.'
                            )
                            ->default(true),

                    ])
                    ->columns(2),

                /*
                |--------------------------------------------------------------------------
                | DATA KELAHIRAN
                |--------------------------------------------------------------------------
                */

                Section::make('Data Kelahiran')
                    ->description(
                        'Informasi tempat dan tanggal lahir.'
                    )
                    ->icon('heroicon-o-calendar-days')
                    ->schema([

                        TextInput::make('birth_place')
                            ->label('Tempat Lahir')
                            ->maxLength(255),

                        DatePicker::make('birth_date')
                            ->label('Tanggal Lahir')
                            ->native(false)
                            ->displayFormat('d/m/Y'),

                    ])
                    ->columns(2),

                /*
                |--------------------------------------------------------------------------
                | DATA GURU
                |--------------------------------------------------------------------------
                */

                Section::make('Informasi Guru')
                    ->description(
                        'Informasi tambahan khusus untuk guru.'
                    )
                    ->icon('heroicon-o-academic-cap')
                    ->schema([

                        TextInput::make('subject')
                            ->label('Mata Pelajaran')
                            ->placeholder(
                                'Contoh: Matematika'
                            )
                            ->maxLength(255),

                        TextInput::make('join_year')
                            ->label('Tahun Bergabung')
                            ->numeric()
                            ->minValue(1900)
                            ->maxValue(date('Y')),

                    ])
                    ->visible(
                        fn ($get) => $get('type') === 'teacher'
                    )
                    ->columns(2),

                /*
                |--------------------------------------------------------------------------
                | FOTO
                |--------------------------------------------------------------------------
                */

                Section::make('Foto Tenaga Pendidik')
                    ->description(
                        'Upload foto profil guru atau karyawan/staff.'
                    )
                    ->icon('heroicon-o-camera')
                    ->schema([

                        FileUpload::make('photo')
                            ->label('Foto')
                            ->image()
                            ->disk('public')
                            ->directory('teachers')
                            ->visibility('public')
                            ->imageEditor()
                            ->maxSize(5120)
                            ->columnSpanFull(),

                    ]),

                /*
                |--------------------------------------------------------------------------
                | DESKRIPSI
                |--------------------------------------------------------------------------
                */

                Section::make('Informasi Tambahan')
                    ->description(
                        'Tambahkan deskripsi atau profil singkat.'
                    )
                    ->icon('heroicon-o-information-circle')
                    ->schema([

                        Textarea::make('description')
                            ->label('Deskripsi / Profil Singkat')
                            ->rows(5)
                            ->columnSpanFull(),

                    ]),

            ]);
    }
}