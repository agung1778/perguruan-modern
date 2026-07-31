<?php

namespace App\Filament\Pages\Auth;

use Filament\Auth\Pages\Login as BaseLogin;

class Login extends BaseLogin
{
    protected string $view = 'filament.pages.auth.login';

    public function getHeading(): string
    {
        return 'Selamat Datang Kembali';
    }

    public function getSubheading(): ?string
    {
        return 'Silakan Login untuk Melanjutkan';
    }
}