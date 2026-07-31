<?php

namespace App\Filament\Resources\Students\Schemas;

use App\Models\EducationUnit;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                /*
                |--------------------------------------------------------------------------
                | IDENTITAS SISWA
                |--------------------------------------------------------------------------
                */

                Section::make('Identitas Siswa')
                    ->description(
                        'Informasi utama mengenai siswa.'
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

                        TextInput::make('nisn')
                            ->label('NISN')
                            ->maxLength(255),

                        Select::make('gender')
                            ->label('Jenis Kelamin')
                            ->options([
                                'Laki-laki' => 'Laki-laki',
                                'Perempuan' => 'Perempuan',
                            ])
                            ->native(false),

                        FileUpload::make('photo')
                            ->label('Foto Siswa')
                            ->image()
                            ->disk('public')
                            ->directory('students')
                            ->visibility('public')
                            ->imageEditor()
                            ->maxSize(5120),

                    ])
                    ->columns(2),


                /*
                |--------------------------------------------------------------------------
                | DATA KELAHIRAN
                |--------------------------------------------------------------------------
                */

                Section::make('Data Kelahiran')
                    ->description(
                        'Informasi tempat dan tanggal lahir siswa.'
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
                | DATA PENDIDIKAN
                |--------------------------------------------------------------------------
                */

                Section::make('Data Pendidikan')
                    ->description(
                        'Informasi akademik dan status pendidikan siswa.'
                    )
                    ->icon('heroicon-o-academic-cap')
                    ->schema([

                        TextInput::make('batch')
                            ->label('Angkatan')
                            ->maxLength(255),

                        TextInput::make('major')
                            ->label('Jurusan')
                            ->maxLength(255),

                        TextInput::make('class')
                            ->label('Kelas')
                            ->maxLength(255),

                        Select::make('status')
                            ->label('Status Siswa')
                            ->options([
                                'Aktif' => 'Aktif',
                                'Lulus' => 'Lulus',
                                'Pindah' => 'Pindah',
                                'Tidak Aktif' => 'Tidak Aktif',
                            ])
                            ->native(false),

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

                        Textarea::make('description')
                            ->label('Keterangan')
                            ->rows(4)
                            ->columnSpanFull(),

                    ])
                    ->columns(2),

            ]);
    }
}