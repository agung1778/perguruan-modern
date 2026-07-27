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
                Section::make('Identitas Guru')
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

                        FileUpload::make('photo')
                            ->label('Foto')
                            ->image()
                            ->disk('public')
                            ->directory('teachers')
                            ->visibility('public')
                            ->imageEditor()
                            ->maxSize(5120),

                        Select::make('gender')
                            ->label('Jenis Kelamin')
                            ->options([
                                'L' => 'Laki-laki',
                                'P' => 'Perempuan',
                            ]),

                        TextInput::make('nip')
                            ->label('NIP')
                            ->maxLength(255),

                        TextInput::make('nuptk')
                            ->label('NUPTK')
                            ->maxLength(255),

                        TextInput::make('birth_place')
                            ->label('Tempat Lahir')
                            ->maxLength(255),

                        DatePicker::make('birth_date')
                            ->label('Tanggal Lahir'),
                    ])
                    ->columns(2),

                Section::make('Informasi Kepegawaian')
                    ->icon('heroicon-o-briefcase')
                    ->schema([
                        TextInput::make('position')
                            ->label('Jabatan')
                            ->maxLength(255),

                        Select::make('status')
                            ->label('Status Kepegawaian')
                            ->options([
                                'Tetap' => 'Guru Tetap',
                                'Honorer' => 'Guru Honorer',
                                'Kontrak' => 'Guru Kontrak',
                                'Tidak Aktif' => 'Tidak Aktif',
                            ])
                            ->searchable(),

                        TextInput::make('education')
                            ->label('Pendidikan Terakhir')
                            ->maxLength(255),

                        TextInput::make('major')
                            ->label('Bidang Studi / Keahlian')
                            ->maxLength(255),
                    ])
                    ->columns(2),

                Section::make('Keterangan')
                    ->icon('heroicon-o-document-text')
                    ->schema([
                        Textarea::make('description')
                            ->label('Keterangan')
                            ->rows(5)
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}