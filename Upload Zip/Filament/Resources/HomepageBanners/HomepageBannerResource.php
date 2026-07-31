<?php

namespace App\Filament\Resources\HomepageBanners;

use App\Filament\Resources\HomepageBanners\Schemas\HomepageBannerForm;
use App\Filament\Resources\HomepageBanners\Tables\HomepageBannersTable;
use App\Models\HomepageBanner;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use UnitEnum;

class HomepageBannerResource extends Resource
{
    protected static ?string $model = HomepageBanner::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-photo';

    protected static string|UnitEnum|null $navigationGroup = 'Website';

    protected static ?string $navigationLabel = 'Banner Homepage';

    protected static ?string $modelLabel = 'Banner Homepage';

    protected static ?string $pluralModelLabel = 'Banner Homepage';

    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return HomepageBannerForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HomepageBannersTable::configure($table);
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