<?php

namespace App\Enums;

enum CollectibleStatus: string
{
    case Created = 'created';
    case Available = 'available';
    case Sold = 'sold';
    case Donated = 'donated';
    case Lost = 'lost';
    case Damaged = 'damaged';
    case Planed = 'planed';
    case Purchased = 'purchased';
    case Assembled = 'assembled';
    case Disassembled = 'disassembled';
    case InStorage = 'storage';
    case Pending = 'pending';
    case Photographed = 'photographed';
    case Printed = 'printed';
    case Framed = 'framed';
}
