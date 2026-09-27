<?php

namespace App\Filament\Resources\Transaction\PaymentResource\Pages;

use App\Filament\Resources\Transaction\PaymentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePayment extends CreateRecord
{
    protected static string $resource = PaymentResource::class;
}
