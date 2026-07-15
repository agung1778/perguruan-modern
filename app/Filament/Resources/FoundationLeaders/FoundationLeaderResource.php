<?php

namespace App\Filament\Resources\FoundationLeaders;

use App\Models\FoundationLeader;
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

class FoundationLeaderResource extends Resource
{
    protected static ?string $model = FoundationLeader::class;
    protected static string|UnitEnum|null $navigationGroup = 'Website';
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-user-circle';
    protected static ?string $navigationLabel = 'Kepala Yayasan';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')->required(),
            FileUpload::make('photo')->image()->directory('foundation'),
            TextInput::make('position'),
            TextInput::make('period'),
            Textarea::make('message')->columnSpanFull(),
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
                TextColumn::make('period'),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFoundationLeaders::route('/'),
            'create' => Pages\CreateFoundationLeader::route('/create'),
            'edit' => Pages\EditFoundationLeader::route('/{record}/edit'),
        ];
    }
}