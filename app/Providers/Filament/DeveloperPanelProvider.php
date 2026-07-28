<?php

namespace App\Providers\Filament;

use BezhanSalleh\FilamentShield\FilamentShieldPlugin;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Panel;
use Filament\PanelProvider;

use Filament\Support\Colors\Color;

use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;

use Illuminate\Routing\Middleware\SubstituteBindings;

use Illuminate\Session\Middleware\StartSession;

use Illuminate\View\Middleware\ShareErrorsFromSession;

class DeveloperPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel

            /*
            |--------------------------------------------------------------------------
            | Panel
            |--------------------------------------------------------------------------
            */

            ->default()

            ->id('developer')

            ->path('developer')


            /*
            |--------------------------------------------------------------------------
            | Branding
            |--------------------------------------------------------------------------
            */

            ->brandName('SIP Yayasan Amaliah')

            ->brandLogo(
                fn () => asset('storage/logo/logo.png')
            )

            ->brandLogoHeight('3rem')

            ->favicon(
                asset('storage/logo/favicon.png')
            )


            /*
            |--------------------------------------------------------------------------
            | Authentication
            |--------------------------------------------------------------------------
            */

            ->login(
                \App\Filament\Pages\Auth\Login::class
            )


            /*
            |--------------------------------------------------------------------------
            | Colors
            |--------------------------------------------------------------------------
            */

            ->colors([
                'primary' => Color::Emerald,
            ])


            /*
            |--------------------------------------------------------------------------
            | Theme
            |--------------------------------------------------------------------------
            */

            ->viteTheme(
                'resources/css/filament/developer/theme.css'
            )


            /*
            |--------------------------------------------------------------------------
            | Resources
            |--------------------------------------------------------------------------
            */

            ->discoverResources(
                in: app_path('Filament/Resources'),
                for: 'App\\Filament\\Resources'
            )


            /*
            |--------------------------------------------------------------------------
            | Pages
            |--------------------------------------------------------------------------
            */

            ->discoverPages(
                in: app_path('Filament/Pages'),
                for: 'App\\Filament\\Pages'
            )


            /*
            |--------------------------------------------------------------------------
            | Widgets
            |--------------------------------------------------------------------------
            */

            ->discoverWidgets(
                in: app_path('Filament/Widgets'),
                for: 'App\\Filament\\Widgets'
            )


            /*
            |--------------------------------------------------------------------------
            | Dashboard Widgets
            |--------------------------------------------------------------------------
            */

            ->widgets([
                \Filament\Widgets\AccountWidget::class,

                \App\Filament\Widgets\DashboardStats::class,

                \App\Filament\Widgets\QuickActions::class,
            ])


            /*
            |--------------------------------------------------------------------------
            | Middleware
            |--------------------------------------------------------------------------
            */

            ->middleware([
                EncryptCookies::class,

                AddQueuedCookiesToResponse::class,

                StartSession::class,

                AuthenticateSession::class,

                ShareErrorsFromSession::class,

                VerifyCsrfToken::class,

                SubstituteBindings::class,

                DisableBladeIconComponents::class,

                DispatchServingFilamentEvent::class,
            ])


            /*
            |--------------------------------------------------------------------------
            | Filament Shield
            |--------------------------------------------------------------------------
            */

            ->plugins([
                FilamentShieldPlugin::make(),
            ])


            /*
            |--------------------------------------------------------------------------
            | Authentication Middleware
            |--------------------------------------------------------------------------
            */

            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}