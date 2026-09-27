<?php


namespace App\Enums;

use App\Enums\Traits\EnumValues;

enum AccountStatus: string
{

    use EnumValues;

    case PENDING = 'pending';
    case ACTIVE = 'active';
    case SUSPENDED = 'suspended';
    case DEACTIVATED = 'deactivated';


    public function isPending(): bool
    {
        return $this == self::PENDING;
    }

    public function isActive(): bool
    {
        return $this === self::ACTIVE;
    }

    public function isSuspended(): bool
    {
        return $this === self::SUSPENDED;
    }

    public function isDeactivated(): bool
    {
        return $this === self::DEACTIVATED;
    }

    public static function getStatusColor(AccountStatus $status): string
    {
        return match ($status) {
            self::PENDING => 'gray',
            self::DEACTIVATED => 'warning',
            self::ACTIVE => 'success',
            self::SUSPENDED => 'danger',
            default => 'default',
        };
    }
}
