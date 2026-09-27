<?php

namespace App\Filament\Resources\Package\ModelExtensionPackageResource\Pages;

use App\Filament\Resources\Package\ModelExtensionPackageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListModelExtensionPackages extends ListRecords
{
    protected static string $resource = ModelExtensionPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
