<?php

namespace App\Filament\Resources\HomepageBanners;

use App\Filament\Resources\HomepageBanners\Pages\CreateHomepageBanner;
use App\Filament\Resources\HomepageBanners\Pages\EditHomepageBanner;
use App\Filament\Resources\HomepageBanners\Pages\ListHomepageBanners;
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


    protected static ?int $navigationSort = 5;



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

            'index' => ListHomepageBanners::route('/'),

            'create' => CreateHomepageBanner::route('/create'),

            'edit' => EditHomepageBanner::route('/{record}/edit'),

        ];
    }
}