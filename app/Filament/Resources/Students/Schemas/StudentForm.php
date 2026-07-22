<?php

namespace App\Filament\Resources\Students\Schemas;

use App\Models\EducationUnit;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Informasi Utama')
                    ->description(
                        'Informasi identitas dan unit pendidikan siswa.'
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

                                TextInput::make('nisn')
                                    ->label('NISN')
                                    ->maxLength(50)
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

                                TextInput::make('batch')
                                    ->label('Angkatan')
                                    ->placeholder('Contoh: 2026')
                                    ->numeric()
                                    ->maxLength(4),

                                TextInput::make('class')
                                    ->label('Kelas')
                                    ->placeholder('Contoh: XII PPLG 1')
                                    ->maxLength(100),

                                TextInput::make('major')
                                    ->label('Jurusan / Program Studi')
                                    ->maxLength(255),

                                Select::make('status')
                                    ->label('Status Siswa')
                                    ->options([
                                        'aktif' => 'Aktif',
                                        'lulus' => 'Lulus',
                                        'pindah' => 'Pindah',
                                        'tidak_aktif' => 'Tidak Aktif',
                                    ])
                                    ->default('aktif')
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

                Section::make('Informasi Pendidikan')
                    ->schema([

                        Grid::make(2)
                            ->schema([

                                TextInput::make('entry_year')
                                    ->label('Tahun Masuk')
                                    ->numeric()
                                    ->minValue(1900)
                                    ->maxValue(2100),

                                TextInput::make('graduation_year')
                                    ->label('Tahun Lulus')
                                    ->numeric()
                                    ->minValue(1900)
                                    ->maxValue(2100),

                            ]),

                    ])
                    ->columnSpanFull(),

                Section::make('Foto Siswa')
                    ->schema([

                        FileUpload::make('photo')
                            ->label('Foto')
                            ->image()
                            ->disk('public')
                            ->directory('students')
                            ->visibility('public')
                            ->imageEditor()
                            ->maxSize(2048)
                            ->columnSpanFull(),

                    ])
                    ->columnSpanFull(),

                Section::make('Keterangan')
                    ->schema([

                        Textarea::make('description')
                            ->label('Keterangan Tambahan')
                            ->rows(5)
                            ->columnSpanFull(),

                    ])
                    ->columnSpanFull(),

            ]);
    }
}