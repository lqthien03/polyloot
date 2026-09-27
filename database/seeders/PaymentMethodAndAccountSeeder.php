<?php

namespace Database\Seeders;

use App\Enums\PaymentMethodType;
use App\Models\PaymentAccount;
use App\Models\PaymentMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentMethodAndAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $methods = [
            [
                'id' => 1,
                'type' => PaymentMethodType::MOMO,
                'name' => 'Ví điện tử Momo',
            ],
            [
                'id' => 2,
                'name' => 'Ngân hàng',
                'type' => PaymentMethodType::BANK
            ]
        ];

        foreach ($methods as $method) {
            PaymentMethod::create($method);
        }



        $accounts = [
            [
                'payment_method_id' => 1,
                'account_name' => 'Nguyễn Văn Thảo',
                'account_number' => '0345005746',
            ],

            [
                'payment_method_id' => 2,
                'account_name' => 'Nguyễn Văn Thảo',
                'account_number' => '0345005746',
            ],

        ];

        foreach ($accounts as $account) {
            PaymentAccount::create($account);
        }
    }
}
