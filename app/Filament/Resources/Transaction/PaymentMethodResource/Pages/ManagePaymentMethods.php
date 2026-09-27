<?php

namespace App\Filament\Resources\Transaction\PaymentMethodResource\Pages;

use App\Filament\Resources\Transaction\PaymentMethodResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePaymentMethods extends ManageRecords
{
    protected static string $resource = PaymentMethodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
