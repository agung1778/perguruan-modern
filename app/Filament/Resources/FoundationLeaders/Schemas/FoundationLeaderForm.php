<?php

namespace App\Filament\Resources\FoundationLeaders\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class FoundationLeaderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Kepala Yayasan')
                    ->description('Kelola informasi pimpinan yayasan yang ditampilkan pada website.')
                    ->icon('heroicon-o-user-circle')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama Lengkap')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('position')
                            ->label('Jabatan')
                            ->required()
                            ->default('Ketua Yayasan')
                            ->maxLength(255),

                        TextInput::make('period')
                            ->label('Periode Jabatan')
                            ->maxLength(100)
                            ->placeholder('Contoh: 2025 - 2030'),

                        FileUpload::make('photo')
                            ->label('Foto')
                            ->image()
                            ->disk('public')
                            ->directory('foundation/leaders')
                            ->visibility('public')
                            ->imageEditor()
                            ->maxSize(5120),

                        RichEditor::make('deskripsi')
                            ->label('Deskripsi / Biodata')
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'underline',
                                'bulletList',
                                'orderedList',
                                'link',
                            ])
                            ->columnSpanFull(),

                        RichEditor::make('message')
                            ->label('Pesan Kepala Yayasan')
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'underline',
                                'bulletList',
                                'orderedList',
                                'link',
                            ])
                            ->columnSpanFull(),

                        Toggle::make('is_active')
                            ->label('Tampilkan di Website')
                            ->default(true)
                            ->inline(false),
                    ])
                    ->columns(2)
                    ->columnSpanFull(),
            ]);
    }
}