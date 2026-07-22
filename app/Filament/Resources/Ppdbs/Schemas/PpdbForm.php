<?php

namespace App\Filament\Resources\Ppdbs\Schemas;

use App\Models\EducationUnit;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;

class PpdbForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('education_unit_id')
                    ->label('Unit Pendidikan')
                    ->options(
                        EducationUnit::query()
                            ->orderBy('name')
                            ->pluck('name', 'id')
                            ->toArray()
                    )
                    ->searchable()
                    ->preload()
                    ->required(),

                TextInput::make('title')
                    ->label('Judul PPDB')
                    ->placeholder('PPDB SMK Amaliah Tahun 2026/2027')
                    ->required()
                    ->maxLength(255),

                TextInput::make('academic_year')
                    ->label('Tahun Ajaran')
                    ->placeholder('2026/2027')
                    ->required()
                    ->maxLength(20),

                Select::make('status')
                    ->label('Status PPDB')
                    ->options([
                        'upcoming' => 'Akan Dibuka',
                        'open' => 'Dibuka',
                        'closed' => 'Ditutup',
                    ])
                    ->default('upcoming')
                    ->required(),

                Toggle::make('is_published')
                    ->label('Publikasikan')
                    ->default(false)
                    ->helperText(
                        'Aktifkan agar informasi PPDB tampil di halaman publik.'
                    ),

                DatePicker::make('registration_start')
                    ->label('Tanggal Mulai Pendaftaran')
                    ->native(false)
                    ->displayFormat('d F Y'),

                DatePicker::make('registration_end')
                    ->label('Tanggal Berakhir Pendaftaran')
                    ->native(false)
                    ->displayFormat('d F Y'),

                TextInput::make('registration_fee')
                    ->label('Biaya Pendaftaran')
                    ->numeric()
                    ->prefix('Rp')
                    ->nullable(),

                TextInput::make('registration_url')
                    ->label('Link Pendaftaran')
                    ->url()
                    ->placeholder('https://...')
                    ->maxLength(255),

                Textarea::make('contact')
                    ->label('Kontak PPDB')
                    ->rows(3)
                    ->placeholder(
                        "WhatsApp: 08xxxxxxxxxx\nEmail: ppdb@example.com"
                    )
                    ->columnSpanFull(),

                RichEditor::make('description')
                    ->label('Deskripsi PPDB')
                    ->columnSpanFull(),

                RichEditor::make('requirements')
                    ->label('Persyaratan Pendaftaran')
                    ->columnSpanFull(),

                RichEditor::make('schedule')
                    ->label('Jadwal Pendaftaran')
                    ->columnSpanFull(),
            ]);
    }
}