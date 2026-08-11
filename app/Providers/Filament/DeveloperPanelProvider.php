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

            ->default()

            ->id('developer')

            ->path('developer')

            ->brandName('SIP Yayasan Amaliah')

            ->brandLogo(
                fn () => asset('logo/logo.png')
            )

            ->brandLogoHeight('3rem')

            ->login(
                \App\Filament\Pages\Auth\Login::class
            )

            ->colors([
                'primary' => Color::Emerald,
            ])

            ->viteTheme(
                'resources/css/filament/developer/theme.css'
            )

            ->discoverResources(
                in: app_path('Filament/Resources'),
                for: 'App\\Filament\\Resources'
            )

            ->discoverPages(
                in: app_path('Filament/Pages'),
                for: 'App\\Filament\\Pages'
            )

            ->discoverWidgets(
                in: app_path('Filament/Widgets'),
                for: 'App\\Filament\\Widgets'
            )

            ->widgets([
                \Filament\Widgets\AccountWidget::class,
                \App\Filament\Widgets\DashboardStats::class,
                \App\Filament\Widgets\QuickActions::class,
            ])

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

            ->plugins([
                FilamentShieldPlugin::make(),
            ])

            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}