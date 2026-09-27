<?php

namespace App\Filament\Resources\Listing\ListingResource\Pages;

use App\Filament\Resources\Listing\ListingResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateListing extends CreateRecord
{
    protected static string $resource = ListingResource::class;
}
