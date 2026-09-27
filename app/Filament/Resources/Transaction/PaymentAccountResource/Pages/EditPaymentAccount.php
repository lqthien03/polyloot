<?php

namespace App\Filament\Resources\Transaction\PaymentAccountResource\Pages;

use App\Filament\Resources\Transaction\PaymentAccountResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPaymentAccount extends EditRecord
{
    protected static string $resource = PaymentAccountResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
