<?php

namespace Modules\Books\Enums;

enum EditionStatus: string
{
    case OnHand = 'on hand';
    case Online = 'online';
    case Downloaded = 'downloaded';
    case Lended = 'lended';
    case Destroyed = 'destroyed';
    case Sold = 'sold';
    case Donated = 'donated';
    case Stored = 'stored';
}
