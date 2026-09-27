<?php

namespace App\Enums\Traits;

trait EnumValues
{
    public static function getValues(): array
    {
        return array_map(fn ($case) => $case->value, static::cases());
    }


    public static function getTranslateValues(): array
    {
        return array_reduce(static::cases(), function ($carry, $case) {
            $carry[$case->value] = __('admin/statuses.' . $case->value);
            return $carry;
        }, []);
    }
}
