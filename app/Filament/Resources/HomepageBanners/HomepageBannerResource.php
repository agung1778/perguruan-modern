<?php

namespace App\Filament\Resources\HomepageBanners;

use App\Models\HomepageBanner;
use BackedEnum;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use UnitEnum;

class HomepageBannerResource extends Resource
{
    protected static ?string $model = HomepageBanner::class;
    protected static string|UnitEnum|null $navigationGroup = 'Website';
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-photo';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('title')->required(),
            Textarea::make('description'),
            FileUpload::make('image')->image()->directory('banner'),
            TextInput::make('button_text'),
            TextInput::make('button_link'),
            Toggle::make('is_active'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image'),
                TextColumn::make('title'),
                TextColumn::make('is_active'),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHomepageBanners::route('/'),
            'create' => Pages\CreateHomepageBanner::route('/create'),
            'edit' => Pages\EditHomepageBanner::route('/{record}/edit'),
        ];
    }
}