<?php

namespace App\Filament\Resources\Agendas\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AgendaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                /*
                |--------------------------------------------------------------------------
                | INFORMASI AGENDA
                |--------------------------------------------------------------------------
                */
                Section::make('Informasi Agenda')
                    ->description('Kelola informasi utama kegiatan atau agenda perguruan.')
                    ->icon('heroicon-o-calendar-days')
                    ->schema([

                        TextInput::make('title')
                            ->label('Judul Agenda')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Contoh: Penerimaan Peserta Didik Baru'),

                        DateTimePicker::make('date')
                            ->label('Tanggal & Waktu')
                            ->required()
                            ->native(false)
                            ->displayFormat('d F Y H:i')
                            ->seconds(false),

                        TextInput::make('location')
                            ->label('Lokasi')
                            ->maxLength(255)
                            ->placeholder('Contoh: Aula Perguruan Amaliah'),

                        Textarea::make('description')
                            ->label('Deskripsi Agenda')
                            ->rows(6)
                            ->columnSpanFull()
                            ->placeholder('Tuliskan informasi lengkap mengenai agenda...'),

                    ])
                    ->columns(2),


                /*
                |--------------------------------------------------------------------------
                | GAMBAR AGENDA
                |--------------------------------------------------------------------------
                */
                Section::make('Media Agenda')
                    ->description('Tambahkan gambar atau poster untuk agenda.')
                    ->icon('heroicon-o-photo')
                    ->schema([

                        FileUpload::make('image')
                            ->label('Gambar Agenda')
                            ->image()
                            ->disk('public')
                            ->directory('agendas')
                            ->visibility('public')
                            ->imageEditor()
                            ->maxSize(5120)
                            ->helperText('Format JPG, JPEG, PNG. Maksimal 5 MB.')
                            ->columnSpanFull(),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | STATUS
                |--------------------------------------------------------------------------
                */
                Section::make('Status Agenda')
                    ->description('Atur apakah agenda akan ditampilkan pada website.')
                    ->icon('heroicon-o-eye')
                    ->schema([

                        Toggle::make('is_active')
                            ->label('Tampilkan Agenda')
                            ->default(true)
                            ->helperText(
                                'Jika dinonaktifkan, agenda tidak akan ditampilkan pada halaman website.'
                            ),

                    ]),

            ]);
    }
}