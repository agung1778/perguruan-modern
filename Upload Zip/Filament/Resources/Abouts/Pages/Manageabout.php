<?php

namespace App\Filament\Resources\Abouts\Pages;

use App\Filament\Resources\Abouts\AboutResource;
use App\Models\About;
use Filament\Resources\Pages\Page;
use Illuminate\Database\Eloquent\Model;

class ManageAbout extends Page
{
    protected static string $resource = AboutResource::class;

    protected string $view = 'filament.pages.manage-about';

    public ?About $record = null;

    public function mount(): void
    {
        $this->record = About::query()->first();
    }

    public function getTitle(): string
    {
        return $this->record
            ? 'Edit Tentang Perguruan'
            : 'Buat Tentang Perguruan';
    }

    public function getHeading(): string
    {
        return $this->record
            ? 'Tentang Perguruan'
            : 'Buat Data Tentang Perguruan';
    }

    public function getSubheading(): ?string
    {
        return $this->record
            ? 'Kelola informasi profil, sejarah, visi, dan misi Perguruan.'
            : 'Lengkapi informasi profil Perguruan untuk ditampilkan pada website.';
    }

    public function getRecord(): ?Model
    {
        return $this->record;
    }
}