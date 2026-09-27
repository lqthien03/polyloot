<?php

namespace App\Filament\Resources\Package\ModelPackageResource\Pages;

use App\Filament\Resources\Package\ModelPackageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListModelPackages extends ListRecords
{
    protected static string $resource = ModelPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
