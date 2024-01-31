<?php

namespace App\Dtos;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Carbon;

class CollectibleInfo implements Arrayable
{
    private int $typeId = 0;
    private int $releaseYear = 0;
    private string $status = '';
    private ?Carbon $purchaseAt = null;

    protected function __construct()
    {
    }

    public static function create(): static
    {
        return new self();
    }

    public function getTypeId(): int
    {
        return $this->typeId;
    }

    public function setTypeId(int $typeId): CollectibleInfo
    {
        $this->typeId = $typeId;
        return $this;
    }

    public function getReleaseYear(): int
    {
        return $this->releaseYear;
    }

    public function setReleaseYear(int $releaseYear): CollectibleInfo
    {
        $this->releaseYear = $releaseYear;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): CollectibleInfo
    {
        $this->status = $status;
        return $this;
    }

    public function getPurchaseAt(): ?Carbon
    {
        return $this->purchaseAt;
    }

    public function setPurchaseAt(?Carbon $purchaseAt): CollectibleInfo
    {
        $this->purchaseAt = $purchaseAt;
        return $this;
    }

    public function toArray(): array
    {
        return [
            'type_id' => $this->typeId,
            'release_year' => $this->releaseYear,
            'status' => $this->status,
            'purchase_at' => $this->purchaseAt,
        ];
    }
}
