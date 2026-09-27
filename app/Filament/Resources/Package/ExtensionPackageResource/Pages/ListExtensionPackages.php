<?php

namespace App\Filament\Resources\Package\ExtensionPackageResource\Pages;

use App\Filament\Resources\Package\ExtensionPackageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExtensionPackages extends ListRecords
{
    protected static string $resource = ExtensionPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
