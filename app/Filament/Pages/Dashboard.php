<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use BackedEnum;
use UnitEnum;


class Dashboard extends BaseDashboard
{

    protected static ?string $title = 'Dashboard Admin';


    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-home';


    protected static string|UnitEnum|null $navigationGroup = 'Website';



    public static function getNavigationLabel(): string
    {
        return 'Dashboard';
    }


}