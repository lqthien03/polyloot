<?php

namespace App\Filament\Resources\Package\ExtensionPackageResource\Pages;

use App\Filament\Resources\Package\ExtensionPackageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExtensionPackage extends EditRecord
{
    protected static string $resource = ExtensionPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
