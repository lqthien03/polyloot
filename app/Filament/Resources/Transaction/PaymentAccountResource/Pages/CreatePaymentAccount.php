<?php

namespace App\Filament\Resources\Transaction\PaymentAccountResource\Pages;

use App\Filament\Resources\Transaction\PaymentAccountResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePaymentAccount extends CreateRecord
{
    protected static string $resource = PaymentAccountResource::class;
}
