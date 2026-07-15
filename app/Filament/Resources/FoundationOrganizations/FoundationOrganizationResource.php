<?php

namespace App\Filament\Resources\FoundationOrganizations;

use App\Models\FoundationOrganization;
use BackedEnum;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use UnitEnum;

class FoundationOrganizationResource extends Resource
{
    protected static ?string $model = FoundationOrganization::class;
    protected static string|UnitEnum|null $navigationGroup = 'Website';
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Organisasi Yayasan';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')->required(),
            FileUpload::make('photo')->image()->directory('organization'),
            TextInput::make('position')->required(),
            TextInput::make('order')->numeric(),
            Toggle::make('is_active'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('photo'),
                TextColumn::make('name'),
                TextColumn::make('position'),
                TextColumn::make('order'),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFoundationOrganizations::route('/'),
            'create' => Pages\CreateFoundationOrganization::route('/create'),
            'edit' => Pages\EditFoundationOrganization::route('/{record}/edit'),
        ];
    }
}
