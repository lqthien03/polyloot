<?php

namespace App\Enums;

use App\Enums\Traits\EnumValues;

enum SiteStatus: int
{

    use EnumValues;

    case ACTIVE = 1;
    case INACTIVE = 2;
    case DRAFT = 3;
    case MAINTENANCE = 4;

    public function isActive(): bool
    {
        return $this === self::ACTIVE;
    }
    public function isInactive(): bool
    {
        return $this === self::INACTIVE;
    }
    public function isMaintenance(): bool
    {
        return $this === self::MAINTENANCE;
    }
    public function isDraft(): bool
    {
        return $this === self::DRAFT;
    }
    public function getLabelText(): string
    {
        return match ($this) {
            self::ACTIVE => 'Active',
            self::INACTIVE => 'Inactive',
            self::MAINTENANCE => 'Maintenance',
            self::DRAFT => 'Draft',
        };
    }
}
