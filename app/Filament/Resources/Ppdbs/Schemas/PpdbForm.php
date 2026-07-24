<?php

namespace App\Filament\Resources\Ppdbs\Schemas;

use App\Models\EducationUnit;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PpdbForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                /*
                |--------------------------------------------------------------------------
                | INFORMASI UTAMA
                |--------------------------------------------------------------------------
                */

                Section::make('Informasi PPDB')
                    ->description(
                        'Informasi utama mengenai penerimaan peserta didik baru.'
                    )
                    ->icon('heroicon-o-academic-cap')
                    ->schema([

                        Select::make('education_unit_id')
                            ->label('Unit Pendidikan')
                            ->options(
                                EducationUnit::query()
                                    ->orderBy('name')
                                    ->pluck(
                                        'name',
                                        'id'
                                    )
                            )
                            ->searchable()
                            ->preload()
                            ->required(),

                        TextInput::make('academic_year')
                            ->label('Tahun Ajaran')
                            ->placeholder('2026/2027')
                            ->required()
                            ->maxLength(20),

                        TextInput::make('title')
                            ->label('Judul PPDB')
                            ->placeholder(
                                'Penerimaan Peserta Didik Baru'
                            )
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),

                        Textarea::make('description')
                            ->label('Deskripsi')
                            ->rows(6)
                            ->columnSpanFull(),

                    ])
                    ->columns(2),


                /*
                |--------------------------------------------------------------------------
                | PERIODE PENDAFTARAN
                |--------------------------------------------------------------------------
                */

                Section::make('Periode Pendaftaran')
                    ->description(
                        'Tentukan periode pendaftaran peserta didik baru.'
                    )
                    ->icon('heroicon-o-calendar-days')
                    ->schema([

                        DatePicker::make('registration_start')
                            ->label('Tanggal Mulai')
                            ->native(false)
                            ->displayFormat('d F Y'),

                        DatePicker::make('registration_end')
                            ->label('Tanggal Berakhir')
                            ->native(false)
                            ->displayFormat('d F Y')
                            ->afterOrEqual(
                                'registration_start'
                            ),

                        TextInput::make('registration_fee')
                            ->label('Biaya Pendaftaran')
                            ->numeric()
                            ->prefix('Rp')
                            ->minValue(0),

                    ])
                    ->columns(3),


                /*
                |--------------------------------------------------------------------------
                | JADWAL & PERSYARATAN
                |--------------------------------------------------------------------------
                */

                Section::make('Detail Pendaftaran')
                    ->description(
                        'Atur jadwal, persyaratan, dan informasi pendaftaran.'
                    )
                    ->icon('heroicon-o-clipboard-document-list')
                    ->schema([

                        Textarea::make('schedule')
                            ->label('Jadwal Pendaftaran')
                            ->placeholder(
                                "Contoh:\n1. Pendaftaran: 1 Desember 2026 - 1 Januari 2027\n2. Seleksi: 5 Januari 2027\n3. Pengumuman: 10 Januari 2027"
                            )
                            ->rows(7)
                            ->columnSpanFull(),

                        Textarea::make('requirements')
                            ->label('Persyaratan')
                            ->placeholder(
                                "Contoh:\n- Fotokopi Kartu Keluarga\n- Fotokopi Akta Kelahiran\n- Pas Foto"
                            )
                            ->rows(8)
                            ->columnSpanFull(),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | PENDAFTARAN ONLINE
                |--------------------------------------------------------------------------
                */

                Section::make('Pendaftaran Online')
                    ->description(
                        'Masukkan link pendaftaran online jika tersedia.'
                    )
                    ->icon('heroicon-o-globe-alt')
                    ->schema([

                        TextInput::make('registration_url')
                            ->label('URL Pendaftaran')
                            ->url()
                            ->placeholder(
                                'https://example.com/ppdb'
                            )
                            ->maxLength(500),

                        TextInput::make('registration_link')
                            ->label('Link Alternatif')
                            ->url()
                            ->placeholder(
                                'https://example.com'
                            )
                            ->maxLength(500),

                    ])
                    ->columns(2),


                /*
                |--------------------------------------------------------------------------
                | KONTAK
                |--------------------------------------------------------------------------
                */

                Section::make('Informasi Kontak')
                    ->description(
                        'Informasi yang dapat dihubungi calon peserta didik.'
                    )
                    ->icon('heroicon-o-phone')
                    ->schema([

                        TextInput::make('contact')
                            ->label('Kontak PPDB')
                            ->placeholder(
                                '0812xxxxxxx / WhatsApp'
                            )
                            ->maxLength(255)
                            ->columnSpanFull(),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | STATUS
                |--------------------------------------------------------------------------
                */

                Section::make('Status Publikasi')
                    ->description(
                        'Atur status dan visibilitas PPDB pada website.'
                    )
                    ->icon('heroicon-o-eye')
                    ->schema([

                        Select::make('status')
                            ->label('Status')
                            ->options([
                                'upcoming' => 'Draft',
                                'open' => 'Dipublikasikan',
                                'closed' => 'Ditutup',
                            ])
                            ->default('draft')
                            ->required(),

                        Toggle::make('is_active')
                            ->label('Aktif')
                            ->default(true),

                        Toggle::make('is_published')
                            ->label('Tampilkan di Website')
                            ->default(false),

                    ])
                    ->columns(3),

            ]);
    }
}