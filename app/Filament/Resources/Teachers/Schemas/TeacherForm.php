<?php

namespace App\Filament\Resources\Teachers\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TeacherForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Informasi Utama')
                    ->description(
                        'Informasi dasar guru atau karyawan.'
                    )
                    ->schema([

                        Grid::make(2)
                            ->schema([

                                TextInput::make('name')
                                    ->label('Nama Lengkap')
                                    ->required()
                                    ->maxLength(255),

                                Select::make('education_unit_id')
                                    ->label('Unit Pendidikan')
                                    ->relationship(
                                        name: 'unit',
                                        titleAttribute: 'name'
                                    )
                                    ->searchable()
                                    ->preload()
                                    ->required(),

                                TextInput::make('nip')
                                    ->label('NIP / NUPTK')
                                    ->maxLength(100)
                                    ->unique(
                                        ignoreRecord: true
                                    ),

                                Select::make('gender')
                                    ->label('Jenis Kelamin')
                                    ->options([
                                        'L' => 'Laki-laki',
                                        'P' => 'Perempuan',
                                    ])
                                    ->native(false),

                                TextInput::make('position')
                                    ->label('Jabatan')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('subject')
                                    ->label('Mata Pelajaran / Bidang')
                                    ->maxLength(255),

                                Select::make('employment_status')
                                    ->label('Status Kepegawaian')
                                    ->options([
                                        'GTY' => 'GTY - Guru Tetap Yayasan',
                                        'GTT' => 'GTT - Guru Tidak Tetap',
                                        'KYT' => 'KYT - Karyawan Tetap',
                                        'KTT' => 'KTT - Karyawan Tidak Tetap',
                                    ])
                                    ->default('GTY')
                                    ->required()
                                    ->native(false),

                                Select::make('is_active')
                                    ->label('Status Aktif')
                                    ->options([
                                        true => 'Aktif',
                                        false => 'Tidak Aktif',
                                    ])
                                    ->default(true)
                                    ->required()
                                    ->native(false),

                            ]),

                    ])
                    ->columnSpanFull(),

                Section::make('Data Kelahiran')
                    ->schema([

                        Grid::make(2)
                            ->schema([

                                TextInput::make('birth_place')
                                    ->label('Tempat Lahir')
                                    ->maxLength(255),

                                DatePicker::make('birth_date')
                                    ->label('Tanggal Lahir')
                                    ->native(false)
                                    ->displayFormat('d F Y'),

                            ]),

                    ])
                    ->columnSpanFull(),

                Section::make('Informasi Kepegawaian')
                    ->schema([

                        TextInput::make('join_year')
                            ->label('Tahun Bergabung')
                            ->numeric()
                            ->minValue(1900)
                            ->maxValue(2100),

                    ])
                    ->columnSpanFull(),

                Section::make('Foto')
                    ->schema([

                        FileUpload::make('photo')
                            ->label('Foto Guru / Karyawan')
                            ->image()
                            ->disk('public')
                            ->directory('teachers')
                            ->visibility('public')
                            ->imageEditor()
                            ->maxSize(2048)
                            ->columnSpanFull(),

                    ])
                    ->columnSpanFull(),

                Section::make('Biodata')
                    ->schema([

                        Textarea::make('bio')
                            ->label('Biodata / Deskripsi')
                            ->rows(6)
                            ->columnSpanFull(),

                    ])
                    ->columnSpanFull(),

            ]);
    }
}