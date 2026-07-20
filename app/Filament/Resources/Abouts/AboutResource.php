<?php

namespace App\Filament\Resources\WebsiteSettings;

use App\Models\WebsiteSetting;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use UnitEnum;

class WebsiteSettingResource extends Resource
{
    protected static ?string $model = WebsiteSetting::class;


    protected static string|UnitEnum|null $navigationGroup = 'Website';


    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-building-office-2';


    protected static ?string $navigationLabel = 'Website Settings';


    protected static ?string $modelLabel = 'Pengaturan Website';



    public static function form(Schema $schema): Schema
    {
        return \App\Filament\Resources\WebsiteSettings\Schemas\WebsiteSettingForm::configure($schema);
    }



    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('school_name')
                    ->label('Nama Sekolah')
                    ->searchable(),

                TextColumn::make('email')
                    ->label('Email'),

                TextColumn::make('phone')
                    ->label('Telepon'),

                TextColumn::make('updated_at')
                    ->label('Update Terakhir')
                    ->dateTime(),

            ])

            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ]);
    }



    public static function getPages(): array
    {
        return [

            'index' => Pages\ListWebsiteSettings::route('/'),

            'create' => Pages\CreateWebsiteSetting::route('/create'),

            'edit' => Pages\EditWebsiteSetting::route('/{record}/edit'),

        ];
    }
}