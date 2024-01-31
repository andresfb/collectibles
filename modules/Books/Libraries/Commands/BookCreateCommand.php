<?php

namespace Modules\Books\Libraries\Commands;

use App\Enums\CollectibleStatus;
use App\Interfaces\TypeCommandInterface;
use App\Models\Type;
use Illuminate\Support\Carbon;
use Modules\Books\Dtos\BookInfo;
use Modules\Books\Services\BookService;
use function Laravel\Prompts\select;
use function Laravel\Prompts\text;

class BookCreateCommand implements TypeCommandInterface
{
    public function __construct(private readonly BookService $bookService)
    {
    }

    public function create(string $typeCode): void
    {
        $bookInfo = $this->loadBasicInfo(Type::getId($typeCode));

        $this->loadCollectibleInfo($bookInfo);

        $this->loadAuthorsInfo($bookInfo);

        $this->bookService->create($bookInfo);
    }

    private function loadBasicInfo(int $typeId): BookInfo
    {
        $bookInfo = BookInfo::create()
            ->setTypeId($typeId)
            ->setTitle(text(
                label: 'Title',
                required: true,
            ))
            ->setDescription(text(
                label: 'Description',
                required: true,
            ));

        $publishedAt = text(
            label: 'When was it published?',
            required: false,
            validate: function ($value) {
                if (empty($value)) {
                    return null;
                }

                return !strtotime($value) !== false
                    ? "Invalid date. Use the format mm/dd/yyyy"
                    : null;
            },
            hint: 'mm/dd/yyyy',
        );

        if (!empty($publishedAt)) {
            $bookInfo->setPublishedAt(Carbon::parse($publishedAt));
        }

        return $bookInfo;
    }

    private function loadCollectibleInfo(BookInfo $bookInfo): void
    {
        $bookInfo->setStatus(select(
            label:  'Select a Status',
            options: CollectibleStatus::toArray(),
            default: CollectibleStatus::AVAILABLE->value
        ));

        $purchasedAt = text(
            label: 'When was it purchased?',
            required: false,
            validate: function ($value) {
                if (empty($value)) {
                    return null;
                }

                return !strtotime($value) !== false
                    ? "Invalid date. Use the format mm/dd/yyyy"
                    : null;
            },
            hint: 'mm/dd/yyyy',
        );

        if (!empty($purchasedAt)) {
            $bookInfo->setPurchaseAt(Carbon::parse($purchasedAt));
        }
    }

    private function loadAuthorsInfo(BookInfo $bookInfo): void
    {
        // TODO: Use the Search prompts function to look for an author.
        // https://laravel.com/docs/10.x/prompts#search
    }
}
