<?php

namespace App\Filament\Resources\Teachers\Schemas;

use App\Models\EducationUnit;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
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

                Section::make('Data Guru')
                    ->description(
                        'Informasi utama mengenai tenaga pendidik.'
                    )
                    ->icon('heroicon-o-user')
                    ->schema([

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

                        Select::make('status')
                            ->label('Status Kepegawaian')
                            ->options([
                                'Tetap' => 'Guru Tetap',
                                'Tidak Tetap' => 'Guru Tidak Tetap',
                                'Honorer' => 'Guru Honorer',
                                'Kontrak' => 'Guru Kontrak',
                            ])
                            ->searchable()
                            ->native(false),

                        TextInput::make('position')
                            ->label('Jabatan')
                            ->maxLength(255),

                        TextInput::make('education')
                            ->label('Pendidikan Terakhir')
                            ->placeholder('Contoh: S1 Pendidikan'),

                    ])
                    ->columns(2),

                /*
                |--------------------------------------------------------------------------
                | DATA KELAHIRAN
                |--------------------------------------------------------------------------
                */

                Section::make('Data Kelahiran')
                    ->description(
                        'Informasi tempat dan tanggal lahir guru.'
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
                | FOTO
                |--------------------------------------------------------------------------
                */

                Section::make('Foto Guru')
                    ->description(
                        'Upload foto profil tenaga pendidik.'
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