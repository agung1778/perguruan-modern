<?php

namespace App\Filament\Resources\Abouts\Pages;

use App\Filament\Resources\Abouts\AboutResource;
use App\Models\About;
use Filament\Resources\Pages\ListRecords;

class ListAbouts extends ListRecords
{
    protected static string $resource = AboutResource::class;

    public function mount(): void
    {
        parent::mount();

        $about = About::query()->first();

        if ($about) {
            $this->redirect(
                AboutResource::getUrl('edit', [
                    'record' => $about,
                ])
            );

            return;
        }

        $this->redirect(
            AboutResource::getUrl('create')
        );
    }

    protected function getHeaderActions(): array
    {
        return [];
    }
}