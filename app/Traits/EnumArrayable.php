<?php

namespace App\Traits;

trait EnumArrayable
{
    public static function toArray(): array
    {
        $conditions = [];
        foreach (self::cases() as $value) {
            $conditions[] = $value->value;
        }

        return $conditions;
    }
}
