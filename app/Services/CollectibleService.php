<?php

namespace App\Services;

use App\Dtos\CollectibleInfo;
use App\Models\Collectible;

class CollectibleService
{
    public function create(CollectibleInfo $info): Collectible
    {

        return new Collectible();
    }
}
