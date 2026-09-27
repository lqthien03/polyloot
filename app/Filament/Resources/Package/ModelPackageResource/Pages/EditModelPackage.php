<?php

namespace App\Filament\Resources\Package\ModelPackageResource\Pages;

use App\Filament\Resources\Package\ModelPackageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditModelPackage extends EditRecord
{
    protected static string $resource = ModelPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
