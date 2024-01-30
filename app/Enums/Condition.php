<?php

namespace App\Enums;

enum Condition: string
{
    case NEW = 'New';
    case USED = 'Used';
    case REFURBISHED = 'Refurbished';
    case OPEN_BOX = 'Open Box';
    case DAMAGED = 'Damaged';
    case UNKNOWN = 'Unknown';
    case OTHER = 'Other';
    case PRINTED = 'Printed';
}
