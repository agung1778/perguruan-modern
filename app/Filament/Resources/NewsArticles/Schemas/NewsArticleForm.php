<?php

namespace App\Filament\Resources\NewsArticles\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class NewsArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                /*
                |--------------------------------------------------------------------------
                | Informasi Berita
                |--------------------------------------------------------------------------
                */
                Section::make('Informasi Berita')
                    ->description(
                        'Kelola informasi utama artikel berita.'
                    )
                    ->icon('heroicon-o-newspaper')
                    ->schema([

                        TextInput::make('title')
                            ->label('Judul Berita')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true),

                        Select::make('news_category_id')
                            ->label('Kategori')
                            ->relationship(
                                name: 'category',
                                titleAttribute: 'name'
                            )
                            ->searchable()
                            ->preload()
                            ->required()
                            ->placeholder('Pilih kategori berita'),

                        Textarea::make('excerpt')
                            ->label('Ringkasan')
                            ->rows(4)
                            ->maxLength(500)
                            ->helperText(
                                'Ringkasan singkat yang ditampilkan pada halaman berita.'
                            )
                            ->columnSpanFull(),

                        FileUpload::make('image')
                            ->label('Gambar Berita')
                            ->image()
                            ->disk('public')
                            ->directory('news')
                            ->visibility('public')
                            ->imageEditor()
                            ->imagePreviewHeight('250')
                            ->maxSize(10240)
                            ->helperText(
                                'Format JPG, JPEG, PNG atau WEBP. Maksimal 10 MB.'
                            ),

                    ])
                    ->columns(2),

                /*
                |--------------------------------------------------------------------------
                | Isi Berita
                |--------------------------------------------------------------------------
                */
                Section::make('Isi Berita')
                    ->description(
                        'Tulis isi artikel berita yang akan ditampilkan kepada pengunjung.'
                    )
                    ->icon('heroicon-o-document-text')
                    ->schema([

                        RichEditor::make('content')
                            ->label('Isi Berita')
                            ->required()
                            ->columnSpanFull()
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'underline',
                                'strike',
                                'link',
                                'blockquote',
                                'h2',
                                'h3',
                                'bulletList',
                                'orderedList',
                                'undo',
                                'redo',
                            ]),

                    ]),

                /*
                |--------------------------------------------------------------------------
                | Publikasi
                |--------------------------------------------------------------------------
                */
                Section::make('Publikasi')
                    ->description(
                        'Atur status dan waktu publikasi berita.'
                    )
                    ->icon('heroicon-o-globe-alt')
                    ->schema([

                        Select::make('status')
                            ->label('Status')
                            ->options([
                                'draft' => 'Draft',
                                'published' => 'Diterbitkan',
                            ])
                            ->default('draft')
                            ->required()
                            ->native(false),

                        DateTimePicker::make('published_at')
                            ->label('Tanggal Publikasi')
                            ->seconds(false)
                            ->native(false)
                            ->helperText(
                                'Kosongkan jika berita belum memiliki jadwal publikasi.'
                            ),

                    ])
                    ->columns(2),

            ]);
    }
}