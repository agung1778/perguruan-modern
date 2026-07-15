<?php

namespace App\Filament\Resources\WebsiteSettings;

use App\Models\WebsiteSetting;
use BackedEnum;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use UnitEnum;

class WebsiteSettingResource extends Resource
{
    protected static ?string $model = WebsiteSetting::class;
    protected static string|UnitEnum|null $navigationGroup = 'Website';
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?string $navigationLabel = 'Pengaturan Website';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('school_name')->label('Nama Perguruan')->required(),
            FileUpload::make('logo')->image()->directory('website'),
            TextInput::make('phone'),
            TextInput::make('email')->email(),
            Textarea::make('address')->columnSpanFull(),
            Textarea::make('social_media')->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('school_name'),
                TextColumn::make('email'),
                TextColumn::make('phone'),
            ])
            ->recordActions([
                EditAction::make(),
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