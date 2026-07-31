<?php

namespace App\Filament\Resources\HomepageBanners\Pages;

use App\Filament\Resources\HomepageBanners\HomepageBannerResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHomepageBanner extends EditRecord
{
    protected static string $resource = HomepageBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}