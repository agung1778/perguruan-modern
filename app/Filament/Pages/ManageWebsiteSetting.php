<?php

namespace App\Filament\Pages;

use App\Filament\Schemas\WebsiteSettingForm;
use App\Models\WebsiteSetting;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Schema;
use Filament\Schemas\Contracts\HasSchemas;
use Filament\Schemas\Concerns\InteractsWithSchemas;

class ManageWebsiteSetting extends Page implements HasSchemas
{
    use InteractsWithSchemas;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string|\UnitEnum|null $navigationGroup = 'Website';

    protected static ?string $navigationLabel = 'Pengaturan Website';

    protected static ?string $title = 'Pengaturan Website';

    protected static ?int $navigationSort = 1;

    protected string $view = 'filament.pages.manage-website-setting';

    public ?array $data = [];

    public function mount(): void
    {
        $setting = WebsiteSetting::query()->first();

        $this->form->fill(
            $setting?->toArray() ?? []
        );
    }

    public function form(Schema $schema): Schema
    {
        return WebsiteSettingForm::configure($schema)
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();

        $setting = WebsiteSetting::query()->first();

        if ($setting) {

            $setting->update($data);

        } else {

            $setting = WebsiteSetting::query()->create($data);

        }

        Notification::make()
            ->title('Pengaturan Website Berhasil Disimpan')
            ->body('Data pengaturan website telah berhasil diperbarui.')
            ->success()
            ->send();

        $this->form->fill(
            $setting->fresh()->toArray()
        );
    }
}